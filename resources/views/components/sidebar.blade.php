<aside class="dashboard-sidebar" id="dashboardSidebar">

    <a
        href="{{ route('dashboard') }}"
        class="sidebar-brand"
    >
        <div>
            <div>LPPM MONITORING</div>
            <small>Universitas</small>
        </div>
    </a>

    <div class="sidebar-menu">

        {{-- MAIN --}}
        <div class="sidebar-section">
            Main
        </div>

        <a
            href="{{ route('dashboard') }}"
            class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
        >
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
        </a>


        {{-- USER MANAGEMENT --}}

        @can('user.view')

            <div class="sidebar-section">
                Management
            </div>

            <a
                href="#"
                class="sidebar-link"
            >
                <i class="bi bi-people"></i>
                <span>Data User</span>
            </a>

        @endcan


        {{-- ROLE MANAGEMENT --}}

        @can('role.view')

            <a
                href="#"
                class="sidebar-link"
            >
                <i class="bi bi-shield-check"></i>
                <span>Role & Permission</span>
            </a>

        @endcan


        {{-- PENELITIAN --}}

        @can('penelitian.view')

            <div class="sidebar-section">
                Academic
            </div>

            <a
                href="#"
                class="sidebar-link"
            >
                <i class="bi bi-journal-text"></i>
                <span>Penelitian</span>
            </a>

        @endcan


        {{-- PENGABDIAN --}}

        @can('pengabdian.view')

            <a
                href="#"
                class="sidebar-link"
            >
                <i class="bi bi-people-fill"></i>
                <span>Pengabdian</span>
            </a>

        @endcan


        {{-- PUBLIKASI --}}

        @can('publikasi.view')

            <a
                href="#"
                class="sidebar-link"
            >
                <i class="bi bi-journal-richtext"></i>
                <span>Publikasi</span>
            </a>

        @endcan


        {{-- REPORT --}}

        @can('laporan.view')

            <div class="sidebar-section">
                Reporting
            </div>

            <a
                href="#"
                class="sidebar-link"
            >
                <i class="bi bi-file-earmark-bar-graph"></i>
                <span>Laporan</span>
            </a>

        @endcan


        {{-- SETTINGS --}}

        @can('setting.view')

            <div class="sidebar-section">
                System
            </div>

            <a
                href="#"
                class="sidebar-link"
            >
                <i class="bi bi-gear"></i>
                <span>Pengaturan</span>
            </a>

        @endcan

    </div>

</aside>