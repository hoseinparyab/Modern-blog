<?php

namespace App\Http\Requests\Auth;

use App\Rules\GoogleCaptchaV3;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
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
            'email'=> ['required', 'email'],
            'password' => ['required']
        ];

    }
    public  function messages()
    {
        return [
            'email.email'=>'ایمیل وارد شده معتبر نمی باشد!',
            'email.required' => 'ایمیل معتبر خود را وارد نمایید!',
            'password.required' => 'کلمه عبور خود را وارد نمایید!',
        ];
    }

}
