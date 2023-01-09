<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'       => 'required|string|max:255',
            'rate'        => 'required|integer|numeric|in:1,2,3,4,5',
            'description' => 'required|string',
            'image'       => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
