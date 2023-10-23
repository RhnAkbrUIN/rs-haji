@extends('layouts.dashboard')

@section('content')
<main class="content px-3 py-2">
    <div class="container-fluid">
    <div class="row w-100">
        <div class="p-3 mt-4">
            <h4>Data Pengguna</h4>
        </div>
    </div>
    <div class="row row-cols-2">
        <!--Bar Chart-->
        <div class="col-6 d-flex">
            <div class="chart-container" style="position: relative; height:35vh; width:100vw">
            <canvas id="canvas-3"></canvas>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="mb-3 mt-3">
    <div class="row">
        <div class="col-lg-6 ">
        <h4>Data Dokter</h4>
        </div>
        
    </div>
        <div class="table-responsive">
        <table class="table table-striped table-hover scroll-horizontal-vertical w-100" id="crudTable_dokter">
        <thead>
            <tr>
            <th scope="col">Kode Dokter</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Gol. Darah</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No.HP/Telp</th>
            <th scope="col">Status Nikah</th>
            <th scope="col">Spesialis</th>
            <th scope="col">Alumni</th>
            <th scope="col">No.ijin Praktek</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        </table>
        </div>
    </div>
    </div>
</main>
@endsection

@push('addon-script')
    
    <script>
        var dokter = <?php echo json_encode($dokter); ?>;
        var labels = [
            'S0001',
            'S0002',
            'S0003',
            'S0004',
            'S0005',
            'S0006',
            'S0007',
            'S0008',
            'S0009',
            'S0010',
            'S0011',
            'S0012',
            'S0013',
            'S0014',
            'S0015',
            'S0016',
            'S0017',
            'S0018',
            'S0019',
            'S0020',
        ];
        var data = Array(20).fill(0); 
        for (var i = 0; i < dokter.length; i++) {
            var sps = dokter[i].kd_sps;
            var index = labels.indexOf(sps);
            if (index !== -1) {
                data[index]++;
            }
        }
    </script>
    
    <script>
    var datatable = $('#crudTable_dokter').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [
            { data: 'kd_dokter', name: 'kd_dokter' },
            { data: 'nm_dokter', name: 'nm_dokter' },
            { data: 'jk', name: 'jk' },
            { data: 'tmp_lahir', name: 'tmp_lahir' },
            { data: 'tgl_lahir', name: 'tgl_lahir' },
            { data: 'gol_drh', name: 'gol_drh' },
            { data: 'agama', name: 'agama' },
            { data: 'almt_tgl', name: 'almt_tgl' },
            { data: 'no_telp', name: 'no_telp' },
            { data: 'stts_nikah', name: 'stts_nikah' },
            { data: 'spesialis.nm_sps', name: 'spesialis.nm_sps' },
            { data: 'alumni', name: 'alumni' },
            { data: 'no_ijn_praktek', name: 'no_ijn_praktek' },
            { data: 'status', name: 'status' },
        ],
    })
</script>
@endpush
