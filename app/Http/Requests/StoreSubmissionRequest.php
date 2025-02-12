<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubmissionRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'institution' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'first_author' => ['required', 'string', 'max:255'],
            'corresponding_author' => ['nullable', 'string', 'max:255'],
            'other_author' => ['nullable', 'string', 'max:255'],
            'paper_title' => ['required', 'string', 'max:255'],
            'presentation_options' => ['required', 'array'],
            'upload' => ['required', 'file', 'mimes:pdf,jpg,png', 'max:2048'],
        ];
    }
}
