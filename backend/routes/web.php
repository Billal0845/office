<?php

use Illuminate\Support\Facades\Route;

// This catch-all route passes all non-API web traffic to your React App
Route::get('/{any}', function () {
    return file_get_contents(public_path('index.html'));
})->where('any', '^(?!api).*$');