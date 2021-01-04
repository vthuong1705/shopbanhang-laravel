<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBannerRequest extends FormRequest
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
            'title'=>'required',
            'content'=>'required',
            'image'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'nhập tên sản phẩm',
            'title.required' => 'nhập tiêu đề',
            'content.required' => 'nhập content',
            'image.required' => 'thêm ảnh',
        ];
    }
}
