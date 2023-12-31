@extends('layouts.dashboard')

@section('content')
<main class="content px-3 py-2">
    <div class="container-fluid">
    <div class="mb-3 mt-3">
    <div class="row">
        <div class="col-lg-6 ">
        <h4>Data Perawat</h4>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
        <div class="table-responsive">
        <table class="table table-striped table-hover scroll-horizontal-vertical w-100" id="crudTable_data_perawat">
        <thead>
            <tr>
            <th scope="col">Kode Perawat</th>
            <th scope="col">Nama Perawat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Status Aktif</th>
            </tr>
        </thead>
        <tbody></tbody>
        </table>
        </div>
    </div>
    </div>
</main>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable_data_perawat').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data:'nik', name:'nik' },
                { data:'nama', name:'nama' },
                { data:'jk', name:'jk' },
                { data:'tmp_lahir', name:'tmp_lahir' },
                { data:'tgl_lahir', name:'tgl_lahir' },
                { data:'alamat', name:'alamat' },
                { data:'kota', name:'kota' },
                { data:'stts_aktif', name:'stts_aktif' },
            ],
        })
    </script>
@endpush
