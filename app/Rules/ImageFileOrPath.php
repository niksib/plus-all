<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Dimensions;

class ImageFileOrPath implements Rule
{
    private ?int $size;
    private ?Dimensions $dimensions;
    private ?string $message = null;

    /**
     * Create a new rule instance.
     *
     * @param int|null $size Max size in kilobytes
     * @param Dimensions|null $dimensions Image dimensions
     */
    public function __construct(?int $size = null, ?Dimensions $dimensions = null)
    {
        $this->size = $size;
        $this->dimensions = $dimensions;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if ($value instanceof UploadedFile) {
            $rules = ['image'];

            if ($this->size) {
                $rules[] = 'max:' . $this->size;
            }

            if ($this->dimensions) {
                $rules[] = $this->dimensions;
            }

            $validator = Validator::make([$attribute => $value], [$attribute => $rules]);
            $result = $validator->passes();

            $this->message = $validator->messages()->first();

            return $result;
        }

        if (is_string($value)) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return $this->message ?? 'The :attribute must be an image.';
    }
}
