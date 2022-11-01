<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', [BukutamuController::class, 'index']);
