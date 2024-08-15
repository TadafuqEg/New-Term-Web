<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;
use Illuminate\Support\Facades\Validator;

class AuthController extends ApiController
{
    public function register(Request $request)
    {
       
        $validator  =   Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' =>'required|unique:users,phone'
            
            
        ]);
        // dd($request->all());
        if ($validator->fails()) {

            return $this->sendError(null,$validator->errors(),400);
        }
        $otpCode = generateOTP();
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        
            'OTP' => $otpCode,
            
            'device_token' => $request->device_token
        ]);
        $role = Role::where('name','Client')->first();
            
        $user->assignRole([$role->id]);
        // Generate OTP
        

        
        // Send OTP via Email (or SMS)
        Mail::to($request->email)->send(new SendOTP($otpCode));

       
        return $this->sendResponse(null,'OTP sent to your email address.',200);

    }

    public function login(Request $request)
    {
      
        $validator  =   Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);
        // dd($request->all());
        if ($validator->fails()) {

            return $this->sendError(null,$validator->errors(),400);
        }
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->sendError(null,'Invalid credentials',401);
        }

        // Generate OTP
        $otpCode = generateOTP();
        $user->OTP= $otpCode ;
        $user->save();
    
        // Send OTP via Email (or SMS)
        Mail::to($request->email)->send(new SendOTP($otpCode));

        return $this->sendResponse(null,'OTP sent to your email address.',200);
    }

    public function verifyOTP(Request $request)
    {
        $validator  =   Validator::make($request->all(), [
            'email' => 'required|string|email',
            'otp' => 'required|string',
        ]);
        // dd($request->all());
        if ($validator->fails()) {

            return $this->sendError(null,$validator->errors(),400);
        }
        $user = User::where('email', $request->email)
                ->where('otp', $request->otp)
                ->first();

        if (!$user) {
            return $this->sendError(null,'Invalid or expired OTP',401);

        }
        $user->device_token=$request->device_token;
        $user->save();
        $user->token=$user->createToken('api')->plainTextToken;
        $user->picture=getFirstMediaUrl($user,$user->avatarCollection);
       
        

        // Here you can either log the user in or confirm their registration

        return $this->sendResponse($user,'OTP verified successfully.',200);

    }

    public function logout(Request $request){
        $user = $request->user();
        $currentToken = $user->currentAccessToken();
        // Revoke the token of the current device
       
      
        $currentToken->delete();
       
        return $this->sendResponse(null,'logout successfuly',200);
        
    }
}