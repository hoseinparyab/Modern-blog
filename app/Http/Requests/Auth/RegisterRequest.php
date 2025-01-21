<?php

namespace App\Http\Requests\Auth;

use App\Rules\GoogleCaptchaV3;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:5','string', 'max:255'],
            'email'=> ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed','email' ,'unique:users', Password::min(8)->max(12)
                ->mixedCase()],
            'g-recaptcha-response' => ['required', new GoogleCaptchaV3('submitRegister',.5)],
        ];

    }
    public  function messages()
    {
        return [
            'token'=>'توکن معتبر نمی باشد!',
            'email.required' => 'ایمیل معتبر خود را وارد نمایید!',
            'email.max' => 'ایمیل مورد نظر حداکثر باید ۲۵۵ کارکتر باشد!',
            'email.email' => 'ایمیل معتبر وارد نمایید!',
            'password.required' => 'کلمه عبور خود را وارد نمایید!',
            'password.min' => 'کلمه عبور باید حداقل 8 کارکتر باشد!',
            'password.max' => 'کلمه عبور باید حداکثر 12 کارکتر باشد!',
            'password.confirmed' => 'کلمه عبور با تکرار آن برابر نیست!',
            'password.mixed' => 'کلمه عبور باید شامل اعداد کارکتر کوچک و بزرگ و کارکترهای ويژه (!@#$%^&*) باشد!',
        ];
    }

}
