<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOurTeamRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => [strtolower($this->method()) === 'put' ? 'nullable' : 'required', 'image'],
            'name_ar' => ['required', 'string'],
            'name_en' => ['nullable', 'string'],
            'job_name_ar' => ['required', 'string'],
            'job_name_en' => ['nullable', 'string'],
        ];
    }
}