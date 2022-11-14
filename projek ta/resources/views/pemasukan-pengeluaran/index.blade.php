@extends('layout.main', [
    'title' => 'Pemasukan/Pengeluaran',
])
@section('content')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 text-center mb-4">KELOLA PEMASUKAN</h1>
        @if (session()->has('success'))
            <div class="alert alert-info col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <a href="/pemasukan-pengeluaran/create" class="btn btn-primary btn-sm">SALDO AWAL</a>

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
                                <th>BUKTI NOTA</th>
                                <th>JUMLAH</th>
                                <th>SALDO</th>
                                <th>INPUT PEMASUKAN/PENGELUARAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keuangan as $value)
                                @if ($value->jenis_id != '3')
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->jenis->jenis }}</td>
                                        <td>{{ $value->tgl }}</td>
                                        <td>{!! nl2br($value->keterangan) !!}</td>
                                        <td><a href="{{ asset('nota/' . $value->bukti_nota) }}"><img
                                                    src="{{ asset('nota/' . $value->bukti_nota) }}" width="100px"
                                                    height="100px"></a></td>
                                        <td>Rp.{{ number_format($value->jumlah, 0, ',', '.') }}</td>
                                        <td>Rp.{{ number_format($value->saldo, 0, ',', '.') }}</td>
                                        <td>
                                            <a href=" /pemasukan-pengeluaran/pemasukan/{{ $value->id }}"
                                                class="btn btn-outline-primary"> Pemasukan</a>
                                            <br>
                                            <a href="  /pemasukan-pengeluaran/pengeluaran/{{ $value->id }}"
                                                class="btn btn-outline-danger mt-2">Pengeluaran</a>
                                        </td>
                                    </tr>
                                @endif
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
