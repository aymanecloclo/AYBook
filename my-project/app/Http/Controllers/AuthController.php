<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController 
{
    //
    public function showLoginForm() {
        return view('auth.login');
    }

    public function registerForm() {
        return view('auth.register');
    }
    public function register(Request $request) 
    {
       
        $request->validate([
            'name' => 'required|max:12',
            'email' => 'required|email|unique:users,email',  
            'password' => 'required|confirmed|min:8',  
        ]);
    
    
        $user = new User();
        $user->name = $request->name;  
        $user->email = $request->email; 
        $user->password = Hash::make($request->password);  
        $user->save(); 
    
        Auth::login($user);  

        return redirect()->route('dashboard')->with('success', 'Successfully registering a user!');
    }
    
    

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('welcome');
        } else {
            return redirect()->back()->with('error', 'Login or ');
        }
    }
}
