<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

Route::get('/supports', [SupportController::class, 'index']);

Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});