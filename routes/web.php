<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// gruppo publicController
Route::controller(PublicController::class)->group(function () {
    // view homepage del sito web
    Route::get('/', 'index')->name('homepage');
});