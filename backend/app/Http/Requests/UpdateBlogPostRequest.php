<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'sometimes|required|string|max:255',
            'subtitle' => 'nullable|string',
            'content_html' => 'sometimes|required|string',
            'hero_image' => 'nullable|string|url',
            'author_id' => 'sometimes|required|exists:authors,id',
            'published_date' => 'sometimes|required|date',
        ];
    }
}
