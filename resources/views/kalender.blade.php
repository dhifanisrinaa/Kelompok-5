@extends('layouts.app')


@section('title', 'Kalender Kehadiran')

@section('page-title', 'Kalender Kehadiran')

@section('breadcrumb', 'Kalender')


@section('content')


<div class="card border-0 shadow-sm">

    <div class="card-header bg-white">

        <div class="d-flex justify-content-between align-items-center">

            <h5 class="card-title mb-0">
                Kalender Kehadiran
            </h5>

            <select class="form-select"
                    style="width: 150px;">

                <option>Agustus 2026</option>
                <option>September 2026</option>
                <option>Oktober 2026</option>

            </select>

        </div>

    </div>


    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered text-center">

                <thead class="table-light">

                    <tr>

                        <th>Sen</th>
                        <th>Sel</th>
                        <th>Rab</th>
                        <th>Kam</th>
                        <th>Jum</th>
                        <th>Sab</th>
                        <th>Min</th>

                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>

                    </tr>


                    <tr>

                        <td class="bg-success text-white">
                            3
                            <br>
                            <small>Hadir</small>
                        </td>
                        <td class="bg-success text-white">
                            4
                            <br>
                            <small>Hadir</small>
                        </td>
                        <td class="bg-success text-white">
                            5
                            <br>
                            <small>Hadir</small>
                        </td>
                        <td class="bg-success text-white">
                            6
                            <br>
                            <small>Hadir</small>
                        </td>
                        <td class="bg-success text-white">
                            7
                            <br>
                            <small>Hadir</small>
                        </td>
                        <td>8</td>
                        <td>9</td>

                    </tr>


                    <tr>

                        <td class="bg-success text-white">
                            10
                            <br>
                            <small>Hadir</small>
                        </td>
                        <td class="bg-success text-white">
                            11
                            <br>
                            <small>Hadir</small></td>
                        <td class="bg-success text-white">
                            12
                            <br>
                            <small>Hadir</small>
                        </td>

                        <td class="bg-success text-white">
                            13
                            <br>
                            <small>Hadir</small>
                        </td>

                        <td class="bg-success text-white">
                            14
                            <br>
                            <small>Hadir</small>
                        </td>

                        <td>15</td>
                        <td>16</td>

                    </tr>


                    <tr>

                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>

                    </tr>


                    <tr>

                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>

                    </tr>


                    <tr>

                        <td>31</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- KETERANGAN -->

        <div class="mt-3">

            <span class="badge bg-success me-2">
                Hadir
            </span>

            <span class="badge bg-warning text-dark me-2">
                Izin
            </span>

            <span class="badge bg-info me-2">
                Sakit
            </span>

            <span class="badge bg-danger">
                Alpa
            </span>

        </div>


    </div>

</div>


@endsection