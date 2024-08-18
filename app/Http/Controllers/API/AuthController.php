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
    public function register(Request $request){

        $validator  =   Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'phone'=> 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            
            
        ]);
        // dd($request->all());
        if ($validator->fails()) {

            return $this->sendError(null,$validator->errors());
        }
       
        
        
        
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ]);

        $role = Role::where('name','Client')->first();
            
        $user->assignRole([$role->id]);
        $user->token=$user->createToken('api')->plainTextToken;
        $user->picture=getFirstMediaUrl($user,$user->avatarCollection);
        return $this->sendResponse($user,'Account Created Successfuly');

    }

    public function login(Request $request)
    {
      
        $validator  =   Validator::make($request->all(), [
            
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        // dd($request->all());
        if ($validator->fails()) {

            return $this->sendError(null,$validator->errors(),400);
        }
        $success_login = false;
        
        $user = User::where('username', $request->username)
            ->whereHas('roles', function ($q) {
                $q->where('name', 'Client');
            })
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $success_login = true;
            if($request->device_token){
                $user->device_token=$request->device_token;
                $user->save();
            }
        }
        

        if($success_login){
            $user->token=$user->createToken('api')->plainTextToken;
            $user->picture=getFirstMediaUrl($user,$user->avatarCollection);
           

        }else{
            return $this->sendError(null,"The password is incorrect",400);
           
        }
        return $this->sendResponse($user,null,200);
    }

    public function logout(Request $request){
        $user = $request->user();
        $currentToken = $user->currentAccessToken();
        // Revoke the token of the current device
       
      
        $currentToken->delete();
       
        return $this->sendResponse(null,'logout successfuly',200);
        
    }
}