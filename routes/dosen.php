<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dosen\DashboardController;

Route::middleware([
    'auth',
    'role:Dosen',
])->group(function () {

    Route::get('/dosen/dashboard', [
        DashboardController::class,
        'index'
    ])->name('dosen.dashboard');

});