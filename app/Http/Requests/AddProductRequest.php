<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'price'=>'required',
            'avatar'=>'required',
            'quantity'=>'required',
            'image'=>'required',
            'desc'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nhập tên sản phẩm',
            'price.required' => 'nhập giá sản phẩm',
            'avatar.required' => 'nhập ảnh đại diện',
            'quantity.required' => 'nhập số lượng sản phẩm',
            'image.required' => 'nhập ảnh mô tả',
            'desc.required' => 'nhập mô tả sản phẩm',
        ];
    }
}
