<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ar_name' => 'required|string|min:2|max:255',
            'en_name' => 'required|string|min:2|max:255',
            'ar_description' => 'required|string|min:2|max:255',
            'en_description' => 'required|string|min:2|max:255',
            'status' => 'required|in:active,inactive',
        ];
    }
}
