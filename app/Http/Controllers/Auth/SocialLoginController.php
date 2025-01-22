<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    //

    public function redirect($driver): RedirectResponse
    {
        //User Send Email To Driver (google|github|...)
        return Socialite::driver($driver)->redirect();
    }
    public function callback($driver) :RedirectResponse
    {
        //Return User Data From Driver (google|github|...)
        $user = Socialite::driver($driver)->user();
        //dd($user);
        $isCurrentUserExist = User::where('email' ,$user->getEmail())->first();

        //True => Login;
        if($isCurrentUserExist ){
            Auth::login($isCurrentUserExist);
            Session::regenerate();
            return redirect()->intended('/')->with('success',''.$user->getName().' خوش آمدید ');
        }else{
            $password  = str::password(8);
            $NewUser = User::create([
                'name'=>$user->getName(),
                'email'=>$user->getEmail(),
                'password'=>bcrypt($password),
                'driver_name'=>$driver,
                'driver_id'=>$user->getId(),
            ]);
            //Login
            Auth::login( $NewUser);
            Session::regenerate();
            //Send Mail
            Mail::to($user->getEmail())->send(new WelcomeMail(Auth::user(),  $password,false,true));
            return redirect()->intended('/')->with('success',''.$user->getName().' خوش آمدید ');
        }
        //False => Register =>login
    }
}
