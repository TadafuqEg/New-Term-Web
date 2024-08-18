<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\ApiController;
use App\Models\User;
use App\Models\ContactUs;
use App\Models\JoinUs;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends ApiController
{
    public function login_view(){
        return view('website.login');
    }
    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the home page
            return redirect()->intended('/');
        }

        // Authentication failed, redirect back with input and error message
        return redirect()->back()->withInput()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }
    public function sign_up_view(){
        return view('website.sign_up');
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'phone'=> 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user instance
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ]);
        $client_role = Role::where('name','Client')->first();
        $user->assignRole([$client_role->id]);
        // Log the user in
        Auth::login($user);

        // Redirect to the home page
        return redirect()->intended('/');
    }
    public function logout(Request $request){
        $user = auth()->user();
        $currentToken = $user->currentAccessToken();
        // Revoke the token of the current device
       
      
        $currentToken->delete();
       
        return redirect()->intended('/');
        
    }
}