<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreHeadlineRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_ar' => 'sometimes|nullable|string',
            'title_en' => 'sometimes|nullable|string',
            'subtitle_ar' => 'sometimes|nullable|string',
            'subtitle_en' => 'sometimes|nullable|string',
        ];
    }
}