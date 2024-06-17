@extends('layouts.dashboard-master')
@section('title', 'Dashboard')

@section('style')
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.css" rel="stylesheet">
@endsection

@section('container')
    <!-- Page Heading -->
    <div class="row align-items-center">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Media dan Informasi</h1>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Tambah</button>
        </div>
    </div>

    <!-- Modal -->
    @include('pages.admin.modals.add-modal')
    @include('pages.admin.modals.edit-modal')

    <!-- DataTales Example -->
    <div class="card shadow mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Informasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">judul</th>
                            <th class="text-center">thumbnail</th>
                            <th class="text-center">isi</th>
                            <th class="text-center">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informasi as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center"><a href="javascript:void(0)"
                                        class="font-weight-medium link">{{ $item->judul }}</a></td>
                                <td class="text-center"><img height="100" src="{{ asset('storage/' . $item->thumbnail) }}"
                                        alt=""></td>
                                <td class="text-center">{{ $item->isi }}</td>
                                <td class="text-center">
                                    <div class="dropdown sub-dropdown">
                                        <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                            id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                            <button type="button" data-toggle="modal"
                                                data-target="#modal-edit-{{ $item->id }}" class="dropdown-item"
                                                href="#">
                                                <i class="text-success" data-feather="edit-2"></i> edit
                                            </button>
                                            <form action="{{ url('/informasi/delete/' . $item->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="dropdown-item" href="#">
                                                    <i class="text-danger" data-feather="trash"></i> hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">judul</th>
                            <th class="text-center">thumbnail</th>
                            <th class="text-center">isi</th>
                            <th class="text-center">aksi</th>
                        </tr>
                    </tfoot>
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
