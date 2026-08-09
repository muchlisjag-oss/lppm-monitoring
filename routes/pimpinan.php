<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pimpinan\DashboardController;

Route::middleware([
    'auth',
    'role:Pimpinan',
])->group(function () {

    Route::get('/pimpinan/dashboard', [
        DashboardController::class,
        'index'
    ])->name('pimpinan.dashboard');

});