<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaguController;

Route::apiResource('lagu', LaguController::class);
