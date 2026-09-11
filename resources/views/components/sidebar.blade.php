<aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">

    {{-- BRAND --}}
    <div class="sidebar-brand">
    <a href="{{ url('/dashboard') }}" class="brand-link">

        <span class="brand-image">
            <i class="bi bi-person-check-fill"></i>
        </span>

        <span class="brand-text fw-bold">
            AbsenSis
        </span>

    </a>
    </div>

    {{-- SIDEBAR CONTENT --}}
    <div class="sidebar-wrapper">

        {{-- SEARCH MENU --}}
        <div class="sidebar-search px-3 pt-3 pb-2">
            <div class="input-group">
                <input type="text"
                       class="form-control"
                       placeholder="Filter menu..."
                       id="sidebarSearch">
            </div>
        </div>

        {{-- MENU --}}
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false">

                {{-- DASHBOARD --}}
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}"
                       class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">

                        <i class="nav-icon bi bi-speedometer2"></i>

                        <p>Dashboard</p>
                    </a>
                </li>


                {{-- KEHADIRAN --}}
                <li class="nav-item {{ request()->routeIs('statistik', 'kalender') ? 'menu-open' : '' }}">

                    <a href="#"
                        class="nav-link {{ request()->routeIs('statistik', 'kalender') ? 'active' : '' }}"
                        data-lte-toggle="treeview">

                        <i class="nav-icon fas fa-calendar-check"></i>

                        <p>
                            Kehadiran
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>

                    </a>

                    {{-- SUBMENU --}}
                    <ul class="nav nav-treeview">

                        {{-- STATISTIK --}}
                        <li class="nav-item">
                            <a href="{{ route('statistik') }}"
                                class="nav-link {{ request()->routeIs('statistik') ? 'active' : '' }}">

                                <i class="nav-icon far fa-circle"></i>

                                <p>Statistik Kehadiran</p>

                            </a>
                        </li>

                        {{-- KALENDER --}}
                        <li class="nav-item">
                            <a href="{{ route('kalender') }}"
                                class="nav-link {{ request()->routeIs('kalender') ? 'active' : '' }}">

                                <i class="nav-icon far fa-circle"></i>

                                <p>Kalender</p>

                            </a>
                        </li>

                    </ul>

                </li>

                {{-- PROFIL --}}
                <li class="nav-item">

                    <a href="{{ url('/profil') }}"
                       class="nav-link {{ request()->is('profil') ? 'active' : '' }}">

                        <i class="nav-icon bi bi-person-fill"></i>

                        <p>
                            Profil
                        </p>

                    </a>

                </li>

                {{-- DATA SISWA --}}
                <li class="nav-item">

                    <a href="{{ route('users.index') }}"
                       class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">

                        <i class="nav-icon bi bi-people -fill"></i>

                        <p>
                            Data Siswa
                        </p>

                    </a>

                </li>


                {{-- LOGOUT --}}
                <li class="nav-item mt-2">

                    <a href="{{ url('/login') }}"
                       class="nav-link">

                        <i class="nav-icon bi bi-box-arrow-right"></i>

                        <p>
                            Logout
                        </p>

                    </a>

                </li>

            </ul>
        </nav>

    </div>

</aside>


{{-- SIDEBAR CUSTOM STYLE --}}
<style>

    /* =========================
       SIDEBAR
       ========================= */

    /* Item Kehadiran */
    .app-sidebar .nav-link {
        display: flex;
        align-items: center;
        min-height: 45px;
        border-radius: 6px;
        transition: all 0.2s ease;
    }

    /* Icon dan tulisan sejajar */
    .app-sidebar .nav-link .nav-icon {
        width: 20px;
        text-align: center;
        margin-right: 10px;
    }

    /* Panah */
    .kehadiran-arrow {
        font-size: 12px;
        transition: transform 0.25s ease;
        margin-right: 5px;
    }

    /* Ketika submenu terbuka */
    .nav-link[aria-expanded="true"] .kehadiran-arrow {
        transform: rotate(90deg);
    }

    /* Submenu */
    #kehadiranSubmenu {
        padding-left: 10px;
    }

    #kehadiranSubmenu .nav-link {
        font-size: 14px;
        padding: 8px 10px;
    }

    #kehadiranSubmenu .nav-icon {
        font-size: 8px;
    }

    /* Hover */
    .app-sidebar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.08);
    }

    /* Menu aktif */
    .app-sidebar .nav-link.active {
        background-color: #0d6efd;
        color: white !important;
    }
    
    .app-sidebar {
        width: 250px;
    }


    /*  =========================
        BRAND SIDEBAR
        ========================= */

.sidebar-brand {
    height: 56px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 0;
}

.brand-link {
    display: flex;
    align-items: center;
    justify-content: center;

    gap: 10px;

    width: 100%;
    height: 100%;

    text-decoration: none;
    color: #fff;
}

.brand-link:hover {
    color: #fff;
}


/* ICON BRAND */

.brand-image {
    width: 36px;
    height: 36px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #0d6efd;

    border-radius: 7px;

    font-size: 19px;

    margin: 0;
}


/* TEXT BRAND */

.brand-text {
    font-size: 18px;

    line-height: 1;

    white-space: nowrap;

    margin: 0;
}

    .brand-link:hover {
        color: #fff;
    }

    .brand-image {
        width: 50px;
        height: 50px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #0d6efd;
        border-radius: 10px;

        font-size: 25px;
    }

    .brand-text {
        font-size: 18px;
    }


    /* =========================
       SEARCH
       ========================= */

    .sidebar-search input {
        height: 38px;

        background: #343a40;
        border: 1px solid #495057;

        color: #fff;

        border-radius: 6px;
    }

    .sidebar-search input::placeholder {
        color: #adb5bd;
    }

    .sidebar-search input:focus {
        background: #343a40;
        color: #fff;
        border-color: #6c757d;
        box-shadow: none;
    }


    /* =========================
       MENU
       ========================= */

    .sidebar-menu {
        padding: 0 8px;
    }

    .sidebar-menu .nav-item {
        margin-bottom: 3px;
    }

    .sidebar-menu .nav-link {
        display: flex;
        align-items: center;

        min-height: 44px;

        padding: 10px 12px;

        border-radius: 6px;

        color: #dee2e6;

        transition: all .2s ease;
    }


    /* ICON */

    .sidebar-menu .nav-icon {
        width: 24px;
        min-width: 24px;

        margin-right: 10px;

        font-size: 17px;

        text-align: center;
    }


    /* TEXT */

    .sidebar-menu .nav-link p {
        margin: 0;

        display: flex;
        align-items: center;

        width: 100%;

        font-size: 15px;
    }


    /* HOVER */

    .sidebar-menu .nav-link:hover {
        background: rgba(255,255,255,.08);
        color: #fff;
    }


    /* ACTIVE */

    .sidebar-menu .nav-link.active {
        background: #0d6efd;
        color: #fff;

        box-shadow: 0 2px 5px rgba(0,0,0,.15);
    }


    /* =========================
       ARROW
       ========================= */

    .sidebar-menu .nav-arrow {
        margin-left: auto;

        transition: transform .2s ease;
    }


    /* Saat submenu terbuka */

    .sidebar-menu .menu-open > .nav-link .nav-arrow {
        transform: rotate(90deg);
    }


    /* =========================
       SUB MENU
       ========================= */

    .sidebar-menu .nav-treeview {
        padding-left: 0;
    }

    .sidebar-menu .nav-treeview .nav-link {
        min-height: 40px;

        padding-left: 46px;

        font-size: 14px;
    }

    .sidebar-menu .nav-treeview .nav-icon {
        font-size: 8px;

        width: 16px;
        min-width: 16px;

        margin-right: 8px;
    }


    /* =========================
       MOBILE
       ========================= */

    @media (max-width: 991.98px) {

        .app-sidebar {
            width: 250px;
        }

    }

</style>


{{-- SIDEBAR SEARCH SCRIPT --}}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const search = document.getElementById('sidebarSearch');

    if (!search) return;

    search.addEventListener('keyup', function () {

        const keyword = this.value.toLowerCase();

        const menuItems =
            document.querySelectorAll(
                '.sidebar-menu > .nav-item'
            );

        menuItems.forEach(function (item) {

            const text =
                item.innerText.toLowerCase();

            if (text.includes(keyword)) {

                item.style.display = '';

            } else {

                item.style.display = 'none';

            }

        });

    });

});

</script>