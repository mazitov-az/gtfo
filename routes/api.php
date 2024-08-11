<?php

declare(strict_types=1);

use App\Http\Controllers\BoostersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/boosters', [BoostersController::class, 'export']);
