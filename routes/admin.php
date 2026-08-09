<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware([
    'auth',
    'role:Super Admin|Admin LPPM',
])->group(function () {

    Route::get('/admin/dashboard', [
        DashboardController::class,
        'index'
    ])->name('admin.dashboard');

});