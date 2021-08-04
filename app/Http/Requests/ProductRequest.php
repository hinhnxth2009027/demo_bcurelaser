<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'thumbnail' => 'required',
            'images' => 'required',
            'description' => 'required',
            'sort_number' => 'required',
            'is_featured' => '',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'thumbnail.required' => 'Chọn ảnh đại diện cho sản phẩm để tiếp tục',
            'images.required' => 'Thêm ảnh chi tiết cho sản phẩm',
            'description.required' => 'Nhập mô tả cho sản phẩm',
            'sort_number.required' => 'Vui lòng nhập định mức sắp xếp'
        ];
    }
}
