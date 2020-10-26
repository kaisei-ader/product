<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPost extends FormRequest
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
            'name' =>'required',
            'arr' => 'required',
            'manufacturer' => 'required',
            'price' =>  'required',
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
            'name' => '商品名',
            'arr' => '入荷元',
            'manufacturer' => '製造元',
            'price' => '値段',
        ];
    }
}
