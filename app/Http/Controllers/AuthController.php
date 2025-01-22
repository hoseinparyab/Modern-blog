<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    // Register  or  Create new user
    public function register(RegisterRequest $request)
    {
        //create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>($request->password),
        ]);

        //atomically login user after registration
        Auth::login($user);

        return redirect()->route('home')->with('success', 'ثبت‌نام شما با موفقیت انجام شد!');
    }
    public function login(LoginRequest $loginRequest): RedirectResponse
    {
        if (Auth::attempt($loginRequest->only('email', 'password'), $loginRequest->filled('remember'))) {
            $loginRequest->session()->regenerate();

            return redirect()->route('home')->with('success', auth()->user()->name . ' خوش آمدید.');
        } else {
            return back()->withErrors([
                'error' => 'نام کاربری یا رمز عبور اشتباه است.'
            ]);
        }
    }
    public  function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->withErrors(['success' => 'به امید دیدار مجدد شما']);

    }
}
