<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', [\Davenguyen\Pipedrive\Http\Controllers\PipedriveController::class, 'test']);
Route::post('/webhook', [\Davenguyen\Pipedrive\Http\Controllers\PipedriveController::class, 'getWebhook']);