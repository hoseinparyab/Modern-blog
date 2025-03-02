<?php

namespace App\Http\Requests\dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50', 'unique:categories,name'],
            'slug' => ['required', 'string', 'max:50', 'unique:categories,slug'],
            'description' => ['nullable', 'string'],
            'icon' => ['required'],
        ];
    }
        public  function messages()
    {
        return [
            'name.required' => 'برای دسته بندی نام انتخاب نمایید.',
            'name.max' => 'نام حداکثر می تواند شامل ۵۰ حرف باشد.',
            'name.unique' => 'این نام قبلا ثبت شده است نام دیگری انتخاب نمایید.',
            'slug.required' => 'برای دسته بندی شناسه لاتین انتخاب نمایید.',
            'slug.max' => 'نام حداکثر می تواند شامل ۵۰ حرف باشد.',
            'slug.unique' => 'شناسه ای با این نام قبلا ثبت شده است نام دیگری انتخاب نمایید.',
            'slug.slug' => 'فرمت شناسه صحیح نمی باشد اگر شناسه بیش از یک بخش دارد هر بخش را با ( - ) از هم جدا نمایید.',
            'icon.required' => 'برای دسته بندی آیکون انتخاب نمایید.'
        ];
    }

}
