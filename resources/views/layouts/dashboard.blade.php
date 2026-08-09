<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        @yield('title', 'Dashboard')
        - LPPM Monitoring
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

    {{-- SIDEBAR --}}
    <x-sidebar />


    {{-- NAVBAR --}}
    <x-navbar />


    {{-- MAIN --}}
    <main class="dashboard-main">

        <div class="dashboard-content">

            {{-- ALERT --}}
            <x-alert />


            {{-- BREADCRUMB --}}
            @hasSection('breadcrumb')

                @yield('breadcrumb')

            @endif


            {{-- PAGE CONTENT --}}
            @yield('content')

        </div>


        {{-- FOOTER --}}
        <x-footer />

    </main>


    @stack('scripts')

</body>

</html>