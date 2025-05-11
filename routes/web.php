<?php

use App\Http\Controllers\HomeCT;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeCT::class, 'index']);
Route::get('/pelayanan-kami', [HomeCT::class, 'services']);
