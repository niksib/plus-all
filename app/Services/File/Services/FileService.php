<?php

namespace App\Services\File\Services;

use Buglinjo\LaravelWebp\Webp;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileService
{
    public const TO_WEBP_EXTENSIONS = ['png', 'jpg', 'jpeg'];


    public function store(UploadedFile $file, string $path): string
    {
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = Str::random(). '.' . $fileExtension;
        $newPath = $file->storeAs('public/' . $path, $fileName);

        if (in_array($fileExtension, self::TO_WEBP_EXTENSIONS)) {
            $fileName = str_replace($fileExtension, 'webp', $fileName);
            Webp::make($file)->save(storage_path('app/public/' . $path . '/' . $fileName), 100);
        }

        return str_replace('public/', '', $newPath);
    }

    public function delete(string $path): void
    {
        Storage::delete('public/' . $path);
    }
}
