<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email'=>'required|email|unique:users,email',
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
                'email.unique'=>'Email bạn nhập đã tồn tại',
        ];
    }
}
