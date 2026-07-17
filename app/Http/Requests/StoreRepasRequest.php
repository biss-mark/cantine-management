<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRepasRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom du repas est requis.',
            'category.required' => 'La catégorie du repas est requise.',
            'image.required' => 'L\'image du repas est requise.',
            'description.required' => 'La description du repas est requise.',
            'ingredient.required' => 'Les ingrédients du repas sont requis.',
        ];
    }
}
