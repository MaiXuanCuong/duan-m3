<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if(Request::ip() == '127.0.0.1'){
        //     return false;
        // }
            return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules =[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password1' => 'required|min:6',
            
           ];
            return $rules;
    }
        public function messages(){
            $messages =[
                'name.required' => 'Hãy Nhập Họ Và Tên Của Bạn',
                'name.min' => 'Hãy Nhập Tên Sản Phẩm Lớn Hơn 3 Ký Tự',
                'email.required' => 'Hãy Nhập Email Của Bạn',
                'email.email' => 'Email Chưa Đúng Định Dạng',
                'password.min' => 'Hãy Nhập Mật Khẩu Lớn Hơn 6 Ký Tự',
                'password.required' => 'Hãy Nhập Mật Khẩu Của Bạn',
                'password1.min' => 'Hãy Nhập Mật Khẩu Lớn Hơn 6 Ký Tự',
                'password1.required' => 'Hãy Xác Nhận Mật Khẩu Của Bạn',
            ];
            return $messages;
        }
}
