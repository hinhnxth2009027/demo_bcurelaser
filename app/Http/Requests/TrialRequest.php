<?php

namespace App\Http\Requests;

use App\Enums\TrialType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TrialRequest extends FormRequest
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
        $rules =  [
            'title' => ['required'],
            'logo' => ['required'],
            'thumbnail' => ['required'],
            'content' => ['required'],
            'file' => ['required'],
            'type' => [Rule::in(TrialType::getValues())],
            'sort_number' => ['required']
        ];
        if(request()->isMethod('put')){
            $rules['title'] =  ['min:6'];
        }
        return $rules;
    }
    public function messages()
    {
        $rules = [
            'title.required' => 'Tiêu đề không được bỏ trống',
            'logo.required' => 'Logo không được bỏ trống',
            'thumbnail.required' => 'Ảnh không được bỏ trống',
            'content.required' => 'Nội dung không được bỏ trống',
            'file.required' => 'Tập tin không được bỏ trống',
            'type.required' => 'Type không được bỏ trống',
            'sort_number.required' => 'Sort number không được bỏ trống'
        ];
        if(request()->isMethod('put')){
            $rules['title.min'] =  'Tiêu đề cập nhập tối thiểu từ 6 ký tự';
        }
        return $rules;
    }
}
