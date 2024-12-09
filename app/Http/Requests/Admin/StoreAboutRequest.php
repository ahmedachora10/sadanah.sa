<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'images' => 'array',
            'images.*' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
        ];
    }
}