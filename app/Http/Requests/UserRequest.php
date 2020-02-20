<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'role_id' =>'required',
            'name'=>'required|min:3',
            'phone' => 'required|min:10|max:11',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed|min:8',
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
                'role_id.required'=>'Bạn phải chọn User Role',
                'name.required'=>'Bạn phải nhập tên user',
                'name.min'=>'Bạn không được nhập tên user ít hơn 3 kí tự',
                'phone.required'=>'Bạn phải nhập số phone',
                'phone.min'=>'Số điện thoại này không đúng',
                'phone.max'=>'Số điện thoại này không đúng',
                'email.required'=>'Bạn phải nhập email',
                'email.email'=>'Email bạn nhập ko đúng',
                'email.unique'=>'Email bạn nhập đã tồn tại',
                'password.required'=>'Bạn phải nhập password',
                'password.confirmed'=>'Password và Re-password không khớp',
                'password.min'=>'Bạn không được nhập password ít hơn 8 kí tự', 
        ];
    }
}
