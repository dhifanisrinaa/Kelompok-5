<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login - Absensi Siswa</title>

    <link rel="stylesheet"
          href="{{ asset('adminlte/css/adminlte.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('adminlte/assets/bootstrap-icons/bootstrap-icons.min.css') }}">

</head>

<body class="login-page bg-body-secondary">

    <div class="login-box">

        <div class="card card-outline card-primary">

            <div class="card-header text-center">

                <a href="#"
                   class="h1">

                    <b>Absensi</b>Siswa

                </a>

            </div>


            <div class="card-body">

                <p class="login-box-msg">
                    Silakan masuk untuk melanjutkan
                </p>


                <form action="{{ route('dashboard') }}"
                      method="GET">

                    <!-- NISN -->
                    <div class="input-group mb-3">

                        <input
                            type="text"
                            name="nisn"
                            class="form-control"
                            placeholder="NISN"
                            required>

                        <div class="input-group-text">

                            <i class="bi bi-person-vcard"></i>

                        </div>

                    </div>


                    <!-- Password -->
                    <div class="input-group mb-3">

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Password"
                            required>

                        <div class="input-group-text">

                            <i class="bi bi-lock"></i>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-8">

                            <div class="form-check">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="remember">

                                <label
                                    class="form-check-label"
                                    for="remember">

                                    Ingat saya

                                </label>

                            </div>

                        </div>


                        <div class="col-4">

                            <button
                                type="submit"
                                class="btn btn-primary w-100">

                                Masuk

                            </button>

                        </div>

                    </div>

                </form>


                <div class="text-center mt-3">

                    <a href="#">
                        Lupa password?
                    </a>

                </div>

            </div>

        </div>

    </div>


    <script src="{{ asset('adminlte/js/adminlte.min.js') }}">
    </script>

</body>

</html>