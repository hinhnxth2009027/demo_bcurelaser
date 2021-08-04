<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            'question' => ['required'],
            'reply_content' => ['required'],
            'sort_number' => ['required','numeric'],
        ];
        return $rules;
    }
    public function messages()
    {
        $rules = [
            'question.required' => 'Câu hỏi không được để trống',
            'reply_content.required' => 'Nội dung không được để trống',
            'sort_number.required' => 'Thứ tự ưu tiên không được để trống',
            'sort_number.numeric' => 'Thứ tự ưu tiên phải thuộc kiểu số',
        ];
        return $rules;
    }
}
