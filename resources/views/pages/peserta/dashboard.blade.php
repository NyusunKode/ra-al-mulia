@extends('layouts.dashboard-master')
@section('title', 'Dashboard Peserta')

@section('style')
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.css" rel="stylesheet">
@endsection

@section('container')
    <!-- Page Heading -->
    <div class="row align-items-center">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Data Diri Peserta</h1>
        </div>
    </div>

    <!-- Modal -->
    <!-- DataTales Example -->
    <div class="card shadow mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Calon Peserta</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Calon Peserta</th>
                            <th class="text-center">Tanggal Lahir</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registration as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $item->nama_lengkap_anak }}</td>
                                <td class="text-center">{{ $item->ttl_anak }}</td>
                                <td class="text-center">{{ $item->jenis_kelamin}}</td>

                                <td class="text-center">
                                    <div class="dropdown sub-dropdown">
                                        <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                            id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                            <a href="/detail-registrasi/{{ $item->id }}" class="dropdown-item">
                                                <i class="text-primary" data-feather="search"></i> Lihat
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
