<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        if (request()->isMethod('put')) {
            return [
                'full_name' => 'required|min:5|max:40',
                'email' => 'required|min:10|max:30',
                'phone' => 'required|min:9|max:12',
                'password' => 'nullable',
            ];
        } else {
            return [
                'full_name' => 'required|min:5|max:40',
                'email' => 'required|min:10|max:30',
                'phone' => 'required|min:9|max:12',
                'password' => 'required|min:6|max:18',
            ];
        }
    }


    public function messages()
    {
        return [
            'full_name.required' => 'Full name field is required',
            'full_name.min' => 'Invalid full name',
            'full_name.max' => 'Invalid full name',
            'email.required' => 'Email field is required',
            'email.min' => 'Invalid email',
            'email.max' => 'Wrong email format',
            'phone.required' => 'Phone number field is required',
            'phone.min' => 'Invalid phone number',
            'phone.max' => 'Wrong phone number format',
            'password.required' => 'Password field is required',
            'password.min' => 'Password must be at least 6 characters',
            'password.max' => 'Password cannot be longer than 18 characters'
        ];
    }

}
