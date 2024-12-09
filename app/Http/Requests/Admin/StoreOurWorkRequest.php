<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOurWorkRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tag_id' => 'required|integer|exists:tags,id',
            // 'images' => 'array',
            'bg_image' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
            'thumb' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
            'client_name_ar' => 'required|string',
            'client_name_en' => 'nullable|string',
            'description_ar' => 'required|string',
            'description_en' => 'nullable|string',
            'content_ar' => 'required|string',
            'content_en' => 'nullable|string',
            'transaction_start_date' => 'required|date',
            'transaction_end_date' => 'required|date||after:transaction_start_date',
            'duration_of_work' => 'required|integer'
        ];
    }
}