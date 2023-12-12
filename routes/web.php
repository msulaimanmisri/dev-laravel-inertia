<?php

use App\Http\Controllers\Pages\PageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia as inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/clients', [PageController::class, 'clients'])->name('page.clients');
Route::get('/services', [PageController::class, 'services'])->name('page.services');
