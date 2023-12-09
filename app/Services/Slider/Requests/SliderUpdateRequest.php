<?php

namespace App\Services\Slider\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderUpdateRequest extends FormRequest
{
    public int $id;

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
            'name' => ['required', 'max:50'],
            'uid' => [
                'required',
                'max:50',
                Rule::unique('sliders')->ignore($this->id)
            ]
        ];
    }
}
