<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'Họ tên không được bỏ trống *',
            'phone.required'=>'Số điện thoại không được bỏ trống *',
            'email.required'=>'Email không được bỏ trống *',
            'message.required'=>'Vui lòng để lại lời nhắn',
        ];
    }
}
