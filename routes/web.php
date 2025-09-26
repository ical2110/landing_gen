<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
| Halaman ini akan menampilkan landing page GenesisxClean.
*/
Route::get('/', [LandingPageController::class, 'index']);
