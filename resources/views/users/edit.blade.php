@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row mb-3">

        <div class="col-sm-6">
            <h1>Edit Siswa</h1>
        </div>

        <div class="col-sm-6">

            <ol class="breadcrumb float-sm-end">

                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ route('users.index') }}">
                        Data Siswa
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Edit Siswa
                </li>

            </ol>

        </div>

    </div>


    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Form Edit Siswa
            </h3>

        </div>


        <form
            action="{{ route('users.update', $user->id) }}"
            method="POST">

            @csrf
            @method('PUT')


            <div class="card-body">

                {{-- Nama --}}
                <div class="mb-3">

                    <label class="form-label">
                        Nama Siswa
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $user->name) }}"
                        required
                    >

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- NIS --}}
                <div class="mb-3">

                    <label class="form-label">
                        NIS
                    </label>

                    <input
                        type="text"
                        name="nis"
                        class="form-control @error('nis') is-invalid @enderror"
                        value="{{ old('nis', $user->nis) }}"
                        maxlength="6"
                        required
                    >

                    @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Password --}}
                <div class="mb-3">

                    <label class="form-label">
                        Password Baru
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Kosongkan jika tidak ingin mengubah password"
                    >

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <small class="text-muted">
                        Isi hanya jika ingin mengganti password siswa.
                    </small>

                </div>

            </div>


            <div class="card-footer">

                <a
                    href="{{ route('users.index') }}"
                    class="btn btn-secondary">

                    Kembali

                </a>

                <button
                    type="submit"
                    class="btn btn-primary">

                    Simpan Perubahan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection