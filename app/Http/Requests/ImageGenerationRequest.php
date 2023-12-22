<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'bg-color' => 'required|max:10',
            'border-color' => 'required|max:10',
            'image' => 'required|image',
            'width' => 'required|max:5',
            'height' => 'required|max:5',
            'email' => 'required|email|max:30',
            'phone' => 'required|max:30',
        ];
    }
}
