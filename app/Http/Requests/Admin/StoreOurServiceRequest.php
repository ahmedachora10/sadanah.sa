<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOurServiceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_ar' => 'required|string',
            'title_en' => 'nullable|string',
            'description_ar' => 'required|string',
            'description_en' => 'nullable|string',
            'image' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
        ];
    }
}