@extends('layouts.home-master')
@section('title', 'Registration')
@section('style')
@endsection

@section('container')

    <body id="not-transparent">
        <section id="about" class="about section" style="margin-top: 8vh">
            <div class="page-title" data-aos="fade">
                <div class="container">
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Daftar</li>
                        </ol>
                    </nav>
                    <h1>Pendaftaran</h1>
                </div>
            </div>
            <div class="container">
                <div class="col-lg-12 mt-2 px-3">
                    @if (session()->has('SUCCESS'))
                        <div class="alert alert-success" role="alert" id="success-alert">{{ session('SUCCESS') }}</div>
                    @endif

                    @if (session()->has('ERROR'))
                        <div class="alert alert-warning" role="alert" id="error-alert">{{ session('ERROR') }}</div>
                    @endif

                    <form action="/register" method="POST" data-aos="fade-up" data-aos-delay="200" class="pt-3 px-3">
                        @csrf
                        <div id="step1" class="row gy-3">
                            <h4 class="mb-3">Formulir Pendaftaran</h4>
                            <h4 class="mt-4">Anak</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">Nama Lengkap Anak <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_lengkap_anak" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="name">Nama Panggilan Anak <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_panggilan_anak" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="jenis_kelamin">Jenis Kelamin Anak <span class="text-danger">*</span></label>
                                    <select class="form-select" name="jenis_kelamin" required>
                                        <option value="" disabled selected></option>
                                        @foreach (\App\Models\Registrasi::getJenisKelaminOptions() as $value)
                                            <option value="{{ $value }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="tempat_lahir_anak">Tempat Lahir Anak <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="tempat_lahir_anak" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="tanggal_lahir_anak">Tanggal Lahir Anak <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="tanggal_lahir_anak" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="usia">Usia Anak <span class="text-danger">*</span></label>
                                    <input type="number" name="usia" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="agama">Agama <span class="text-danger">*</span></label>
                                    <select class="form-select" name="agama" required>
                                        <option value="" disabled selected></option>
                                        @foreach (\App\Models\Registrasi::getAgama() as $value)
                                            <option value="{{ $value }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="anak_ke">Anak Ke- <span class="text-danger">*</span></label>
                                    <input type="number" name="anak_ke" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="bersaudara">Jumlah Bersaudara <span class="text-danger">*</span></label>
                                    <input type="number" name="bersaudara" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="status_dalam_keluarga">Status Dalam Keluarga <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="status_dalam_keluarga" class="form-control" required>
                                </div>
                            </div>

                            <h4 class="mt-4">Orang Tua/Wali</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="ayah">Nama Ayah <span class="text-danger">*</span></label>
                                    <input type="text" name="ayah" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="pekerjaan_ayah">Pekerjaan Ayah <span class="text-danger">*</span></label>
                                    <input type="text" name="pekerjaan_ayah" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="pendidikan_ayah">Pendidikan Ayah <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="pendidikan_ayah" class="form-control" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="alamat_ayah">Alamat Ayah <span class="text-danger">*</span></label>
                                    <input type="text" name="alamat_ayah" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="ibu">Nama Ibu <span class="text-danger">*</span></label>
                                    <input type="text" name="ibu" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="pekerjaan_ibu">Pekerjaan Ibu <span class="text-danger">*</span></label>
                                    <input type="text" name="pekerjaan_ibu" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="pendidikan_ibu">Pendidikan Ibu <span class="text-danger">*</span></label>
                                    <input type="text" name="pendidikan_ibu" class="form-control" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="alamat_ibu">Alamat Ibu <span class="text-danger">*</span></label>
                                    <input type="text" name="alamat_ibu" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="no_hp_ortu">Nomor HP Orang Tua <span class="text-danger">*</span></label>
                                    <input type="text" name="no_hp_ortu" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="sejarah_sakit">Sejarah Penyakit Anak (Jika Ada)</label>
                                    <input type="text" name="sejarah_sakit" class="form-control">
                                </div>
                            </div>

                            <h4 class="mt-4">Akun</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="username">Username <span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="password_confirmation">Konfirmasi Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12 mt-4 text-center">
                                <button class="px-4 btn btn-primary" type="submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection
