<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title_ar' => ['required', 'string'],
            'title_en' => ['required', 'string'],
            'content_ar' => ['required', 'string'],
            'content_en' => ['required', 'string'],
            'author_ar' => ['required', 'string'],
            'author_en' => ['required', 'string'],
            'job_title_ar' => ['required', 'string'],
            'job_title_en' => ['required', 'string'],
        ];
    }
}