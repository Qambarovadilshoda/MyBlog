<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'category_id' => 'required',
            'title' => 'required|string|unique:posts|max:225',
            'short_content' => 'required|string|max:225',
            'context' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
