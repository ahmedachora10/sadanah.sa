<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'title_ar' => ['nullable', 'string'],
            // 'title_en' => ['nullable', 'string'],
            'link' => ['nullable', 'string'],
            'top' => ['nullable', 'string'],
            'left' => ['nullable', 'string'],
            'right' => ['nullable', 'string'],
            'bottom' => ['nullable', 'string'],
            'top_ar' => ['nullable', 'string'],
            'left_ar' => ['nullable', 'string'],
            'right_ar' => ['nullable', 'string'],
            'bottom_ar' => ['nullable', 'string'],
            'image_ar' => strtolower($this->method()) == 'put' ? 'nullable' : 'required',
            'image_en' => strtolower($this->method()) == 'put' ? 'nullable' : 'required',
        ];
    }
}
