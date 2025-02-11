<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
            'student_id' => ['nullable', 'string', 'max:255'],
            'institution' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'has_paper' => ['required', 'boolean'],
            'author_type' => ['nullable', 'string', 'max:255'],
            'paper_title' => ['nullable', 'string', 'max:255'],
            'join_trip' => ['required', 'boolean'],
            'join_dinner' => ['required', 'boolean'],
            'participation_option' => ['required', 'string'],
            'upload' => ['required', 'file', 'mimes:pdf,jpg,png', 'max:2048'],
        ];
    }
}
