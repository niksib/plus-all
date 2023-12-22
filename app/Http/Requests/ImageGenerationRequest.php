<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageGenerationRequest extends FormRequest
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

    public function response(array $errors) {

        return response()->json($errors, 403);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'bg-color' => 'required|string|max:10',
            'border-color' => 'required|string|max:10',
            'image' => 'required|image',
            'width' => 'required|string|max:5',
            'height' => 'required|string|max:5',
            'phone' => 'required|email|max:30',
            'email' => 'required|string|max:30',
        ];
    }
}
