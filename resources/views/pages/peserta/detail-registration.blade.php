@extends('layouts.dashboard-master')
@section('title', 'Dashboard Peserta')

@section('style')
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.css" rel="stylesheet">
@endsection

@section('container')
    <div class="page-breadcrumb">

    </div>

    <div class="container-fluid">
        {{-- <div class="row">
        </div> --}}

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 ">
                <div class="card mb-4">
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                            <img width="90" src="{{ asset('assets/img/profile.jpeg') }}" alt="user image"
                                class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
                        </div>
                        <div class="flex-grow-1 mt-3 mt-sm-5">
                            <div
                                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                <div class="user-profile-info">
                                    <h4>Nama Orang Tua : {{ $registration->user->name }}</h4>
                                    <h4>No.HP : {{ $registration->user->no_telp }}</h4>
                                    {{-- <ul
                                        class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                        <li class="list-inline-item d-flex gap-1">{{ $registration->user->no_telp }}</li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 ">
                <!-- About User -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-action-title mb-0">Data Diri Anak</h5>
                        <ul class="list-unstyled mb-4 mt-3">
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Nama Anak :</span>

                                <span>{{ $registration->nama_lengkap_anak }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Nama Panggilan :</span>
                                <span>{{ $registration->nama_panggilan_anak }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Usia :</span>
                                <span>{{ $registration->usia }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Lahir :</span>
                                <span>{{ $registration->ttl_anak }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Jenis Kelamin :</span>
                                <span>{{ $registration->jenis_kelamin }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Anak Ke :</span>
                                <span>{{ $registration->anak_ke }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Jumlah Saudara :</span>
                                <span>{{ $registration->bersaudara }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Agama :</span>
                                <span>{{ $registration->agama }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i data-feather="check-square"></i>
                                <span class="fw-medium mx-2 text-heading">Status Dalam Keluarga :</span>
                                <span>{{ $registration->status }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ About User -->
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
