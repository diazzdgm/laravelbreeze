<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SuperheroApiController;
use App\Http\Controllers\Api\UniverseApiController;

Route::get('/superheros', [SuperheroApiController::class, 'index']);
Route::get('/superheros/{id}', [SuperheroApiController::class, 'show']);
Route::get('/superheros-search', [SuperheroApiController::class, 'search']);

Route::get('/universes', [UniverseApiController::class, 'index']);
Route::get('/universes/{id}', [UniverseApiController::class, 'show']);
