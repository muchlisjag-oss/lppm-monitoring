<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reviewer\DashboardController;

Route::middleware([
    'auth',
    'role:Reviewer',
])->group(function () {

    Route::get('/reviewer/dashboard', [
        DashboardController::class,
        'index'
    ])->name('reviewer.dashboard');

});