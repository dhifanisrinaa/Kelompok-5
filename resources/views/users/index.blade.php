@extends('layouts.app')

@section('content')

<!--begin::App Main-->
<main class="app-main">

    <!--begin::App Content Header-->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="mb-0 fs-3">Data Siswa</h1>
                </div>

                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Home</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Data Siswa
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--end::App Content Header-->


    <!--begin::App Content-->
    <div class="app-content">
        <div class="container-fluid">

            {{-- Pesan berhasil --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                    </button>
                </div>
            @endif


            <div class="card">

                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">

                        <h3 class="card-title">
                            Daftar Siswa
                        </h3>

                        <a
                            href="{{ route('users.create') }}"
                            class="btn btn-primary">

                            <i class="bi bi-plus-circle"></i>
                            Tambah Siswa

                        </a>

                    </div>
                </div>


                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped table-hover">

                            <thead>
                                <tr>
                                    <th style="width: 70px;">No</th>
                                    <th>Nama Siswa</th>
                                    <th>NIS</th>
                                    <th>Role</th>
                                    <th style="width: 180px;">Aksi</th>
                                </tr>
                            </thead>


                            <tbody>

                                @forelse($users as $user)

                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>


                                        <td>
                                            {{ $user->name }}
                                        </td>


                                        <td>
                                            {{ $user->nis }}
                                        </td>


                                        <td>

                                            <span class="badge text-bg-primary">
                                                {{ ucfirst($user->role) }}
                                            </span>

                                        </td>


                                        <td>

                                            <div class="d-flex gap-2">

                                                {{-- Edit --}}
                                                <a
                                                    href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-warning btn-sm">

                                                    <i class="bi bi-pencil-square"></i>
                                                    Edit

                                                </a>


                                                {{-- Delete --}}
                                                <form
                                                    action="{{ route('users.destroy', $user->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus siswa ini?')">

                                                    @csrf
                                                    @method('DELETE')


                                                    <button
                                                        type="submit"
                                                        class="btn btn-danger btn-sm">

                                                        <i class="bi bi-trash"></i>
                                                        Hapus

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td
                                            colspan="5"
                                            class="text-center text-muted py-4">

                                            Belum ada data siswa.

                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!--end::App Content-->

</main>
<!--end::App Main-->

@endsection