<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreatmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'thumbnail' => 'required',
            'content' => 'required',
            'protocol' => 'required',
            'protocol_images' => 'required',
            'sort_number' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Trường tiêu đề là bắt buộc',
            'title.min' => 'Nhập vào tiêu đề cụ thể',
            'thumbnail.required' => 'Ảnh đại diện cho bài viết không được bỏ chống',
            'content.required' => 'Nội dung bài viết không được phép bỏ chống',
            'protocol.required' => 'trường quy trình điều trị không được bỏ chống',
            'protocol_images.required' => 'vui lòng tải lên ảnh mô tả phương pháp ',
            'protocol_images_caption.min' => 'Vui lòng nhập mô tả chi tiết hơn',
            'sort_number.required' => 'Độ ưu tiên là bắt buộc',
            'sort_number.numeric' => 'Độ ưu tiên phải là một số nguyên',
        ];
    }

}
