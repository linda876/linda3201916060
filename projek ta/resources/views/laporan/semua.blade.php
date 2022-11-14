@extends('layout.main', [
    'title' => 'Semua Laporan',
])
@section('content')
    <script type="text/javascript" language="JavaScript">
        function konfirmasi() {
            tanya = confirm("Anda Yakin Akan Menghapus Data ?");
            if (tanya == true) return true;
            else return false;
        }
    </script>
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 text-center mb-4">LAPORAN KEUANGAN</h1>
        @if (session()->has('success'))
            <div class="alert alert-info col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <a href="#" class="btn btn-primary btn-sm">SEMUA LAPORAN</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <table id="example" class="table text-center table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>JENIS</th>
                                <th>TANGGAL</th>
                                <th>KETERANGAN</th>
                                <th>JUMLAH</th>
                                <th>SALDO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semua as $value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->jenis->jenis }}</td>
                                    <td>{{ $value->tgl }}</td>
                                    <td>{!! nl2br($value->keterangan) !!}</td>
                                    <td>Rp.{{ number_format($value->jumlah, 0, ',', '.') }}</td>
                                    <td>Rp.{{ number_format($value->saldo, 0, ',', '.') }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="   https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
