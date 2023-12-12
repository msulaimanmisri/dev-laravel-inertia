<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia as inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

Route::get('/', function () {
    $username = "Sulaiman Misri";
    $frameworks = ['Laravel', 'Vue', 'Inertia'];

    return inertia::render('Index', compact('username', 'frameworks'));
});
