<?php

if (! function_exists('getValueByLocale')) {
    function getValueByLocale(array $values, array $map, string $default): ?string
    {
        $key = $map[app()->getLocale()] ?? $default;

        return $values[$key] ?? ($values[$default] ?? null);
    }
}

if (! function_exists('getWebpImage')) {
    function getWebpImage(?string $path): ?string
    {
        if (empty($path)) {
            return '';
        }

        return str_replace(\App\Services\File\Services\FileService::TO_WEBP_EXTENSIONS, 'webp', $path);
    }
}

if (! function_exists('getImageExtension')) {
    function getImageExtension(string $path): ?string
    {
        $pathArray = explode('.', $path);

        return end($pathArray);
    }
}
