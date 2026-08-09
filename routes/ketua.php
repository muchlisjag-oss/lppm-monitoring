<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ketua\DashboardController;

Route::middleware([
    'auth',
    'role:Ketua LPPM',
])->group(function () {

    Route::get('/ketua/dashboard', [
        DashboardController::class,
        'index'
    ])->name('ketua.dashboard');

});