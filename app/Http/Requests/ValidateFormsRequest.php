<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:50|min:3',
            'email' => 'required|email|unique:users,email,{$id},id',
            'phone' => 'required|min:9|max:9',
            'address' => 'required|string|max:100|min:3',
            'city' => 'required|string|max:50|min:3',
            'state' => 'required|string|max:50|min:3',
            'country' => 'required|string|max:50|min:3',
            'postal_code' => 'required|string|max:10|min:3',
            // 'cpf' => '',
            // 'birthday' => '',
            // 'phone' => '',
            // 'city' => '',
            // 'state' => '',
            // 'category' => '',
            // 'quantity' => '',
            // 'cost' => '',
            // 'sale' => '',
        ];
    }
}
