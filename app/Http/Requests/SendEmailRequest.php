<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.*' => 'Поле не может быть пустым',
            'description.*' => 'Поле не может быть пустым ',
            'phone_number.*' => 'Неправильный формат телефона',
            'email.*' => 'Неправильный формат почты',
        ];
    }
}
