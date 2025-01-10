<?php

use Illuminate\Support\Facades\File;

if (!function_exists('storage_path')) {
    function storage_path($path = '')
    {
        return __DIR__ . '/storage' . ($path ? '/' . $path : '');
    }
}

$basePath = storage_path('repository');

if (!file_exists($basePath)) {
    mkdir($basePath, 0755, true);
    echo "Folder 'repository' berhasil dibuat di storage.\n";
} else {
    echo "Folder 'repository' sudah ada.\n";
}
