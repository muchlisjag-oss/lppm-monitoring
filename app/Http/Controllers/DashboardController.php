<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function index(): RedirectResponse
    {
        $user = auth()->user();

        return match (true) {

            $user->hasAnyRole([
                'Super Admin',
                'Admin LPPM'
            ]) => redirect()->route('admin.dashboard'),

            $user->hasRole('Reviewer')
                => redirect()->route('reviewer.dashboard'),

            $user->hasRole('Dosen')
                => redirect()->route('dosen.dashboard'),

            $user->hasRole('Ketua LPPM')
                => redirect()->route('ketua.dashboard'),

            $user->hasRole('Pimpinan')
                => redirect()->route('pimpinan.dashboard'),

            default => abort(403),

        };
    }
}