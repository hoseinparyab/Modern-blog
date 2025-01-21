<?php

namespace App\Http\Requests\Auth;

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
        ];

    }
}
