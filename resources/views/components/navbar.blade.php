<nav class="app-header navbar navbar-expand bg-body shadow-sm">
    <div class="container-fluid">

        <!-- Left Navbar -->
        <ul class="navbar-nav align-items-center">

            <li class="nav-item">
                <a class="nav-link"
                   data-lte-toggle="sidebar"
                   href="#"
                   role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>

            <li class="nav-item d-none d-md-block">
                <a href="{{ route('dashboard') }}"
                   class="nav-link">
                    Dashboard
                </a>
            </li>

            <li class="nav-item d-none d-md-block">
                <a href="{{ route('kalender') }}"
                   class="nav-link">
                    Kalender
                </a>
            </li>

        </ul>


        <!-- Search -->
        <form class="d-none d-md-flex ms-auto me-3">

            <div class="input-group">

                <input
                    class="form-control"
                    type="search"
                    placeholder="Cari..."
                    aria-label="Search">

                <button
                    class="btn btn-outline-secondary"
                    type="submit">

                    <i class="fas fa-search"></i>

                </button>

            </div>

        </form>


        <!-- Right Navbar -->
        <ul class="navbar-nav">

            <!-- Notification -->
            <li class="nav-item me-2">

                <a class="nav-link position-relative"
                   href="#">

                    <i class="far fa-bell"></i>

                    <span
                        class="position-absolute top-1 start-100 translate-middle badge rounded-pill bg-danger">

                        0

                    </span>

                </a>

            </li>


            <!-- Profile -->
            <li class="nav-item dropdown">

                <a
                    class="nav-link dropdown-toggle d-flex align-items-center"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown">

                    <i class="fas fa-user-circle fs-4 me-2"></i>

                    <span class="d-none d-md-inline">
                        Siswa
                    </span>

                </a>


                <ul class="dropdown-menu dropdown-menu-end shadow">

                    <li>

                        <a
                            class="dropdown-item"
                            href="{{ route('profil') }}">

                            <i class="fas fa-user me-2"></i>

                            Profil

                        </a>

                    </li>


                    <li>

                        <hr class="dropdown-divider">

                    </li>


                    <li>

                        <a
                            class="dropdown-item text-danger"
                            href="{{ route('login') }}">

                            <i class="fas fa-sign-out-alt me-2"></i>

                            Logout

                        </a>

                    </li>

                </ul>

            </li>

        </ul>

    </div>
</nav>