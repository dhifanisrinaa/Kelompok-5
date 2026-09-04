@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

<div class="row">

    <!-- Total Hari -->
    <div class="col-lg-3 col-6">

        <div class="small-box text-bg-primary">

            <div class="inner">

                <h3>10</h3>

                <p>
                    Total Hari Sekolah
                </p>

            </div>

            <i class="small-box-icon bi bi-calendar-check"></i>

        </div>

    </div>


    <!-- Hadir -->
    <div class="col-lg-3 col-6">

        <div class="small-box text-bg-success">

            <div class="inner">

                <h3>10</h3>

                <p>
                    Hadir
                </p>

            </div>

            <i class="small-box-icon bi bi-person-check"></i>

        </div>

    </div>


    <!-- Izin -->
    <div class="col-lg-3 col-6">

        <div class="small-box text-bg-warning">

            <div class="inner">

                <h3>0</h3>

                <p>
                    Izin
                </p>

            </div>

            <i class="small-box-icon bi bi-envelope"></i>

        </div>

    </div>


    <!-- Tidak Hadir -->
    <div class="col-lg-3 col-6">

        <div class="small-box text-bg-danger">

            <div class="inner">

                <h3>0</h3>

                <p>
                    Tidak Hadir
                </p>

            </div>

            <i class="small-box-icon bi bi-person-x"></i>

        </div>

    </div>

</div>


<!-- Informasi Siswa -->

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Informasi Siswa
        </h3>

    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-6">

                <strong>Nama</strong>

                <p>
                    Dhifa Nisrina Arij
                </p>

            </div>


            <div class="col-md-6">

                <strong>NISN</strong>

                <p>
                    1234567890
                </p>

            </div>


            <div class="col-md-6">

                <strong>Kelas</strong>

                <p>
                    XII RPL 2
                </p>

            </div>


            <div class="col-md-6">

                <strong>Jurusan</strong>

                <p>
                    Rekayasa Perangkat Lunak
                </p>

            </div>

        </div>

    </div>

</div>

@endsection