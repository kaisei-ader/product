<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMailPost extends FormRequest
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
            'name' =>  'required',
            'email' => 'required',
            'tell' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'required' =>':attributeの入力は必須です',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'tell' => '電話番号',
            'message' => 'お問い合わせ内容',
        ];
    }
}
