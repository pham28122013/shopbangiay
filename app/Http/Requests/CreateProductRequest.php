<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'product_type_id' => 'required',
            'name'=>'required|min:3',
            'price' => 'required|min:6',
            'code'=>'required|unique:products,code|min:8|max:10',
            'quantity'=>'required|min:1',
            'image' => 'required|image',
        ];
    }
    
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'product_type_id.required' => 'Bạn phải chọn thể loại cho sản phẩm',
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm bạn nhập ko hợp lệ',
            'price.required' => 'Bạn phải nhập giá tiền cho sản phẩm',
            'price.min' => 'Bạn nhập giá tiền ko hợp lệ',
            'code.required' => 'Bạn phải nhập mã code',
            'code.unique' => 'Mã code đã tồn tại',
            'code.min' => 'Mã code sai',
            'code.max' => 'Mã code sai',
            'quantity.required' => 'Bạn phải nhập vào số lượng',
            'quantity.min' => 'Số lượng ko hợp lệ',
            'image.required' => 'Bạn phải chọn image',
            'image.image' => 'Hình ảnh upload ko đúng',
        ];
    }
}
