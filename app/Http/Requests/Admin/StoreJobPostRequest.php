<?php

namespace App\Http\Requests\Admin;

use App\Enums\JobType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

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
            'job_city_id' => 'required|integer|exists:job_cities,id',
            'title_ar' => 'nullable|string',
            'title_en' => 'nullable|string',
            'number' => 'nullable|string',
            'type' => ['required', new Enum(JobType::class)],
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