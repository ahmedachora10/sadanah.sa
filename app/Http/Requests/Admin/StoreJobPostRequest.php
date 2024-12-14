<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_ar' => 'nullable|string',
            'title_en' => 'nullable|string',
            'number' => 'nullable|string',
            'type_ar' => 'nullable|string',
            'type_en' => 'nullable|string',
            'responsibilities_ar' => 'nullable|string',
            'responsibilities_en' => 'nullable|string',
            'requirements_ar' => 'nullable|string',
            'requirements_en' => 'nullable|string',
            'experience_ar' => 'nullable|string',
            'experience_en' => 'nullable|string',
            'education_ar' => 'nullable|string',
            'education_en' => 'nullable|string',
        ];
    }
}