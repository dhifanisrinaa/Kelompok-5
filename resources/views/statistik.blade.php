@extends('layouts.app')


@section('title', 'Statistik Kehadiran')

@section('page-title', 'Statistik Kehadiran')

@section('breadcrumb', 'Statistik Kehadiran')


@section('content')


<div class="row g-3">


    <!-- TABEL -->

    <div class="col-12 col-lg-7">

        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white">

                <h5 class="card-title mb-0">
                    Rekap Kehadiran
                </h5>

            </div>


            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead class="table-light">

                            <tr>

                                <th>Status</th>

                                <th>Jumlah</th>

                                <th>Persentase</th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    <i class="fas fa-circle text-success me-2"></i>
                                    Hadir
                                </td>

                                <td>10</td>

                                <td>100%</td>

                            </tr>


                            <tr>

                                <td>
                                    <i class="fas fa-circle text-warning me-2"></i>
                                    Izin
                                </td>

                                <td>0</td>

                                <td>0%</td>

                            </tr>


                            <tr>

                                <td>
                                    <i class="fas fa-circle text-info me-2"></i>
                                    Sakit
                                </td>

                                <td>0</td>

                                <td>0%</td>

                            </tr>


                            <tr>

                                <td>
                                    <i class="fas fa-circle text-danger me-2"></i>
                                    Alpa
                                </td>

                                <td>0</td>

                                <td>0%</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>



    <!-- PERSENTASE -->

    <div class="col-12 col-lg-5">

        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white">

                <h5 class="card-title mb-0">
                    Persentase Kehadiran
                </h5>

            </div>


            <div class="card-body text-center">

                <div class="display-3 fw-bold text-success">
                    100%
                </div>

                <p class="text-muted">
                    Tingkat Kehadiran
                </p>


                <div class="progress"
                     style="height: 20px;">

                    <div
                        class="progress-bar bg-success"
                        style="width: 100%;">

                        100%

                    </div>

                </div>

            </div>

        </div>

    </div>


</div>


@endsection