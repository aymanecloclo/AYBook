<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class AuthController extends Controller
{


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
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect()->route('auth.login')->with('success', 'your account has been created successfully');

    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('auth.dashboard');
        } else {
            return redirect()->back()->with('error', 'Login or password not correct');
        }
        

    }

    public function showDashboard() {
        return view('auth.posts');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('auth.login');

    }

    public function showProfile() {
        return view('auth.profile');
    }

}


