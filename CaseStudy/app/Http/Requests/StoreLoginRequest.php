<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules =[
            'email' => 'required|email',
            'password' => 'required|min:4',
            
           ];
            return $rules;
    }
        public function messages(){
            $messages =[
                'email.required' => 'Hãy Nhập Email Của Bạn',
                'email.email' => 'Email Chưa Đúng Định Dạng',
                'password.required' => 'Hãy Nhập Mật Khẩu Của Bạn',
                'password.min' => 'Hãy Nhập Mật Khẩu Phải Có ít Nhất 5 Ký Tự',
            ];
            return $messages;
        }
}
