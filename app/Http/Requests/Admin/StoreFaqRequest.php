<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaqRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'question_ar' => ['required', 'string'],
            'question_en' => ['nullable', 'string'],
            'answer_ar' => ['required', 'string'],
            'answer_en' => ['nullable', 'string'],
        ];
    }
}
