<?php

namespace App\Http\Requests\Drugs;

use Illuminate\Foundation\Http\FormRequest;

class StoreDrugRequest extends FormRequest
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
            'ar_name'=>['required','min:2','max:50'],
            'en_name'=>['required','min:2','max:50'],
            'category_id'=>['required','integer','exists:categories,id'],
            'stock'=>['required','integer'],
            'ar_description'=>['required','min:2','max:250'],
            'en_description'=>['required','min:2','max:50'],
            'price'=>['required'],
            'status'=>['required','in:active,inactive'],
        ];
    }
}
