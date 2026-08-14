<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        @yield('title', 'Absensi Siswa')
    </title>


    <!-- Google Font -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Bootstrap -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


    <!-- Icon -->
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- AdminLTE -->
    <link
        rel="stylesheet"
        href="{{ asset('adminlte/css/adminlte.min.css') }}">


    @yield('css')

</head>


<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div class="app-wrapper">


        <!-- NAVBAR -->
        @include('components.navbar')


        <!-- SIDEBAR -->
        @include('components.sidebar')


        <!-- MAIN CONTENT -->
        <main class="app-main p-3">

            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h2 class="mb-0 fw-normal">
                        @yield('page-title')
                    </h2>


                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb mb-0">

                            <li class="breadcrumb-item">

                                <a href="{{ route('dashboard') }}">
                                    Home
                                </a>

                            </li>

                            <li class="breadcrumb-item active">

                                @yield('breadcrumb')

                            </li>

                        </ol>

                    </nav>

                </div>


                <!-- PAGE CONTENT -->

                @yield('content')


            </div>

        </main>


    </div>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- AdminLTE JS -->
    <script
        src="{{ asset('adminlte/js/adminlte.min.js') }}">
    </script>


    @yield('js')

</body>

</html>