<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreWhyUsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'properties_ar' => ['array'],
            'properties_ar.*' => ['string'],
            'properties_en' => ['array'],
            'properties_en.*' => ['string'],
        ];
    }
}