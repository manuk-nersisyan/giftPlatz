<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'category_id' => 'required|integer|exists:categories,id',
            'subcategory_id' => 'sometimes|nullable|integer|exists:subcategories,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'sometimes|accepted',
            'is_actual' => 'sometimes|accepted',
            'images' => 'sometimes|nullable',
            'images.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
        ];
    }
}
