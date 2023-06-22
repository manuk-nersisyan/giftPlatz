<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:contacts,email,'.$this->contact->id,
            'is_actual' => 'sometimes|accepted',
            'lat' => 'required|string|max:255',
            'long' => 'required|string|max:255',
            'facebook_link' => 'required|string|max:255',
            'instagram_link' => 'required|string|max:255',
        ];
    }
}
