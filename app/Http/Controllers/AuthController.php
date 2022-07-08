<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function signupView()
    {
        return view('signup');
    }

    public function loginView()
    {
        return view('signin');
    }

    public function store(RegisterRequest $request)
    {
        // $email = $request->email;

        $user = new User([
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password,
        ]);

        $user['password'] = bcrypt($user['password']);
        $user->save();

        if($user) {
            // Mail::to($email)->send(new AuthMail($email));
            return redirect('/signin')->with('message', 'Account created successfully! Please login');
        } else {
            return back()->with('message', 'Register failed');
        }
    }

    public function login(LoginRequest $request)
    {        
        if(Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            if($request->has('remember')) { 
                Cookie::queue('useremail', $request->email, 1440);
                // Cookie::queue('userpass', $request->password, 1440);
            }

            if(Auth::user()->role_as == 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/');
            }
        }

        return back()->with('message', 'Login Failed! Check your email or password again');
    }

    public function logout()
    {
        auth()->logout();
        
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
