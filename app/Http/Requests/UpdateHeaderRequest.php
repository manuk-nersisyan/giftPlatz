<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeaderRequest extends FormRequest
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
            'text_1' => 'required|string|max:255',
            'text_2' => 'required|string|max:255',
            'logo' => 'nullable|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ];
    }
}
