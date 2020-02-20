<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name'=>'required|min:3',
            'phone' => 'required|min:10|max:11',
            'email'=>'required|email',
            'address' => 'required|max:100',
            'note' => 'max:100',
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
                'name.required'=>'Bạn phải nhập tên user',
                'name.min'=>'Bạn không được nhập tên user ít hơn 3 kí tự',
                'phone.required'=>'Bạn phải nhập số phone',
                'phone.min'=>'Số điện thoại này không đúng',
                'phone.max'=>'Số điện thoại này không đúng',
                'email.required'=>'Bạn phải nhập email',
                'email.email'=>'Email bạn nhập ko đúng',
                'address.required' => 'Bạn phải nhập address',
                'address.max' => 'Bạn nhập address ko đúng',
                'note.max' => 'Bạn nhập note ko đúng',
        ];
    }
}