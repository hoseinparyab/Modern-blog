<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Listeners\SendWelcomeMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Password as FacadesPassword;

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

        // ارسال ایمیل خوش‌آمدگویی
   event(new SendWelcomeMail($user));
//        event(new UserSubscribed($user));
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

    public function sendResetPasswordLink(Request $request) :RedirectResponse
    {
//dd($request);
        $request->validate([
            'email' => ['required','email']
        ],[
            'email.required'=>'ایمیل خود را وارد نمایید!',
            'email.email'=>'ایمیل معتبر خود را وارد نمایید!'
        ]);

        $status = FacadesPassword::sendResetLink(
            $request->only('email')
        );
        return $status === FacadesPassword::RESET_LINK_SENT
            ? back()->with(['success' =>'لینک بازیابی کلمه عبور به ایمیل شما ارسال شد.'])
            : back()->withErrors(['error' => 'برای دریافت مجدد لینک بازیابی کلمه عبور چند لحظه صبر کنید']);

    }

    public function resetPasswordToken(string $token)
    {
        return view('auth.reset-password',['token'=>$token]);
    }

    public function passwordUpdate(Request $request)
    {
        //dd($request);
        $request->validate([
            'token' => ['required'],
            'email' => ['required','email'],
            'password' => ['required', 'confirmed', Password::min(8)->max(12)->mixedCase()->letters()->numbers()->symbols()],
        ],
            [
                'token'=>'توکن معتبر نمی باشد!',
                'email.required' => 'ایمیل معتبر خود را وارد نمایید!',
                'email.max' => 'ایمیل مورد نظر حداکثر باید ۲۵۵ کارکتر باشد!',
                'email.email' => 'ایمیل معتبر وارد نمایید!',
                'password.required' => 'کلمه عبور خود را وارد نمایید!',
                'password.min' => 'کلمه عبور باید حداقل 8 کارکتر باشد!',
                'password.max' => 'کلمه عبور باید حداکثر 12 کارکتر باشد!',
                'password.confirmed' => 'کلمه عبور با تکرار آن برابر نیست!',
                'password.mixed' => 'کلمه عبور باید شامل اعداد کارکتر کوچک و بزرگ و کارکترهای ويژه (!@#$%^&*) باشد!',
            ]
        );
        $status = FacadesPassword::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                //event(new PasswordReset($user));
            }
        );
        return $status === FacadesPassword::PASSWORD_RESET
            ? redirect()->route('login')->with('success', 'کلمه عبور شما تغیر کرد اکنون می توانید با آن در سایت لاگین نمایید.')
            : back()->withErrors(['error' => 'توکن بازیابی کلمه عبور معتبر نمی باشد!']);
    }
}
