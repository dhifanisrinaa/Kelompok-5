@extends('layouts.app')


@section('title', 'Profil Kelompok')

@section('page-title', 'Profil Kelompok')

@section('breadcrumb', 'Profil')


@section('content')


<div class="row g-3">


    <!-- FOTO -->

    <div class="col-12 col-md-4">

        <div class="card card-primary card-outline shadow-sm">

            <div class="card-body text-center">

                <i
                    class="fas fa-circle-user text-primary"
                    style="font-size: 100px;">
                </i>


                <h3 class="mt-3">
                    Kelompok 5
                </h3>


                <p class="text-muted mb-0">
                    XII RPL 2
                </p>


                <p class="text-muted">
                    Rekayasa Perangkat Lunak
                </p>

            </div>

        </div>

    </div>



    <!-- DATA SISWA -->

    <div class="col-12 col-md-8">

        <div class="card shadow-sm">

            <div class="card-header">

                <h5 class="card-title mb-0">
                    Data Kelompok
                </h5>

            </div>


            <div class="card-body">

                <table class="table">

                    <tr>

                        <th width="30%">
                            Kelompok
                        </th>

                        <td>
                            Kelompok 5
                        </td>

                    </tr>


                    <tr>

                        <th>
                            NISN
                        </th>

                        <td>
                            1234567890
                        </td>

                    </tr>


                    <tr>

                        <th>
                            Kelas
                        </th>

                        <td>
                            XII RPL 2
                        </td>

                    </tr>


                    <tr>

                        <th>
                            Jurusan
                        </th>

                        <td>
                            Rekayasa Perangkat Lunak
                        </td>

                    </tr>


                    <tr>

                        <th>
                            Anggota Kelompok
                        </th>

                        <td>
                            1. Dhifa Nisrina Arij <br>
                            2. Muhammad Fadhil Rahman <br>
                            3. Muhammad Qidamal Fahrizi <br>
                            4. Nur Hazizah <br>
                            5. Wily Yanti <br>
                        </td>

                    </tr>

                </table>

            </div>

        </div>

    </div>


</div>


@endsection
