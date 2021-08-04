<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class   TestimonialRequest extends FormRequest
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
        $rules = [
            'name' => ['required'],
            'title' => ['required'],
            'content' => ['required'],
            'date' => ['required','date'],
            'video' => ['required'],
            'sort_number' => ['required','numeric'],

        ];
        return $rules;
    }
    public function messages()
    {
        $rules = [
            'name.required' => 'Tên không được bỏ trống',
            'title.required' => 'Tiêu đề không được bỏ trống',
            'content.required' => 'Nội dung không được bỏ trống',
            'date.required' => 'Thời gian không được bỏ trống',
            'date.date' => 'Thời gian phải thuộc kiểu ngày',
            'video.required' => 'Video không được bỏ trống',
            'sort_number.required' => 'Thứ tự ưu tiên không được bỏ trống',
            'sort_number.numeric' => 'Thứ tự ưu tiên phải thuộc kiểu số',
        ];
        return $rules;
    }
}
