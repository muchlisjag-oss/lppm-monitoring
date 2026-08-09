<nav class="navbar dashboard-navbar px-3">

    <div class="container-fluid">

        <button
            class="btn btn-light d-lg-none"
            type="button"
            id="sidebarToggle"
        >
            <i class="bi bi-list"></i>
        </button>

        <div class="ms-auto d-flex align-items-center gap-3">

            <span class="text-muted d-none d-md-inline">
                {{ auth()->user()->name }}
            </span>

            <div class="dropdown">

                <button
                    class="btn btn-light dropdown-toggle"
                    data-bs-toggle="dropdown"
                >
                    <i class="bi bi-person-circle me-1"></i>
                    Account
                </button>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <a
                            class="dropdown-item"
                            href="{{ route('profile.edit') }}"
                        >
                            <i class="bi bi-person me-2"></i>
                            Profile
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                        >
                            @csrf

                            <button
                                type="submit"
                                class="dropdown-item text-danger"
                            >
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Logout
                            </button>
                        </form>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>