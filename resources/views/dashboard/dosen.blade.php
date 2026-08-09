@extends('layouts.dashboard')

@section('title', 'Dashboard Dosen')

@section('breadcrumb')

    <x-breadcrumb title="Dashboard Dosen" />

@endsection

@section('content')

    <div class="row g-4">

        <div class="col-12 col-md-4">

            <x-card>

                <p class="text-muted mb-1">
                    Penelitian Saya
                </p>

                <h3 class="fw-bold">
                    0
                </h3>

            </x-card>

        </div>


        <div class="col-12 col-md-4">

            <x-card>

                <p class="text-muted mb-1">
                    Pengabdian Saya
                </p>

                <h3 class="fw-bold">
                    0
                </h3>

            </x-card>

        </div>


        <div class="col-12 col-md-4">

            <x-card>

                <p class="text-muted mb-1">
                    Publikasi
                </p>

                <h3 class="fw-bold">
                    0
                </h3>

            </x-card>

        </div>

    </div>

@endsection