@extends('layouts.dashboard')

@section('title', 'Dashboard Admin')

@section('breadcrumb')

    <x-breadcrumb title="Dashboard Admin" />

@endsection

@section('content')

    <div class="row g-4">

        <div class="col-12 col-md-6 col-xl-3">

            <x-card>

                <div class="d-flex justify-content-between">

                    <div>
                        <p class="text-muted mb-1">
                            Total Penelitian
                        </p>

                        <h3 class="fw-bold mb-0">
                            0
                        </h3>
                    </div>

                    <div class="text-primary fs-2">
                        <i class="bi bi-journal-text"></i>
                    </div>

                </div>

            </x-card>

        </div>


        <div class="col-12 col-md-6 col-xl-3">

            <x-card>

                <div class="d-flex justify-content-between">

                    <div>
                        <p class="text-muted mb-1">
                            Total Pengabdian
                        </p>

                        <h3 class="fw-bold mb-0">
                            0
                        </h3>
                    </div>

                    <div class="text-success fs-2">
                        <i class="bi bi-people"></i>
                    </div>

                </div>

            </x-card>

        </div>


        <div class="col-12 col-md-6 col-xl-3">

            <x-card>

                <div class="d-flex justify-content-between">

                    <div>
                        <p class="text-muted mb-1">
                            Publikasi
                        </p>

                        <h3 class="fw-bold mb-0">
                            0
                        </h3>
                    </div>

                    <div class="text-warning fs-2">
                        <i class="bi bi-journal-richtext"></i>
                    </div>

                </div>

            </x-card>

        </div>


        <div class="col-12 col-md-6 col-xl-3">

            <x-card>

                <div class="d-flex justify-content-between">

                    <div>
                        <p class="text-muted mb-1">
                            User
                        </p>

                        <h3 class="fw-bold mb-0">
                            {{ \App\Models\User::count() }}
                        </h3>
                    </div>

                    <div class="text-danger fs-2">
                        <i class="bi bi-people"></i>
                    </div>

                </div>

            </x-card>

        </div>

    </div>


    <div class="row g-4 mt-1">

        <div class="col-12 col-xl-8">

            <x-card title="Monitoring Kinerja">

                <div
                    class="d-flex justify-content-center align-items-center"
                    style="height: 300px;"
                >

                    <div class="text-center text-muted">

                        <i class="bi bi-bar-chart fs-1"></i>

                        <p class="mt-2 mb-0">
                            Grafik akan tersedia pada modul monitoring.
                        </p>

                    </div>

                </div>

            </x-card>

        </div>


        <div class="col-12 col-xl-4">

            <x-card title="Informasi Sistem">

                <div class="mb-3">

                    <small class="text-muted">
                        Login sebagai
                    </small>

                    <div class="fw-semibold">
                        {{ auth()->user()->name }}
                    </div>

                </div>


                <div>

                    <small class="text-muted">
                        Role
                    </small>

                    <div class="fw-semibold">

                        {{ auth()->user()->getRoleNames()->join(', ') }}

                    </div>

                </div>

            </x-card>

        </div>

    </div>

@endsection