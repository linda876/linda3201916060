@extends('layout.main', [
    'title' => 'Pemasukan/Pengeluaran',
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
        <h1 class="mt-4 text-center mb-4">KELOLA PEMASUKAN</h1>
        @if (session()->has('success'))
            <div class="alert alert-info col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <a href="#" class="btn btn-primary btn-sm">TAMBAH PEMASUKAN</a>
            </div>
            <div class="card-body">
                <!--/.row-->
                <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-body">


                            <form method="POST" action="/pemasukan-pengeluaran/store" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="tgl" class="form-label"><strong>Inpute Tanggal</strong></label>
                                    <input id="tgl" type="datetime-local" class="form-control" name="tgl">
                                </div>
                                <input id="jenis_id" type="text" name="jenis_id" value="2" hidden>
                                <div class="mb-2">
                                    <label for="keterangan" class="form-label"><strong>Inpute Keterangan</strong></label>
                                    <input id="keterangan" type="text" class="form-control" placeholder="keterangan"
                                        name="keterangan">
                                </div>
                                <div class="mb-2">
                                    <label for="category" class="form-label"><strong>Jenis Pemasukan</strong></label>
                                    <select class="form-select" name="jenis_id" id="jenis_id" onchange="keterangan()">
                                        <option value="1" deskrip="Pemasukan Kolekte" selected>
                                            Pemasukan Kolekte</option>
                                        <option value="2" deskrip="Pemasukan Kolekte">
                                            Pemasukan Sumbangan</option>

                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label for="jumlah_saldo" class="form-label"><strong>Saldo</strong></label>
                                    <input id="jumlah_saldo" type="text" class="form-control" name="jumlah_saldo"
                                        value="{{ $pemasukan->saldo }}" onkeyup="sum();" placeholder="Jumlah Saldo">
                                </div>
                                <div class="mb-2">
                                    <label for="jumlah" class="form-label"><strong>Jumlah Pemasukan</strong></label>
                                    <input id="jumlah" type="text" class="form-control" name="jumlah"
                                        onkeyup="sum();" placeholder="Jumlah">
                                </div>
                                <div class="mb-2">
                                    <label for="bukti_nota" class="form-label"><strong>Bukti Nota</strong></label>
                                    <input id="bukti_nota" type="file" class="form-control" name="bukti_nota">
                                </div>
                                <div class="mb-2">
                                    <label for="jumlah" class="form-label"><strong>Jumlah Saldo</strong></label>
                                    <input id="saldo" type="text" class="form-control" name="saldo"
                                        placeholder="Saldo Saat Ini">
                                </div>

                                <div style="margin-top:10px" class="form-group d-flex">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls flex">
                                        <button type="submit" class="btn btn-success">Tambah Data</button>
                                        <a href="/pemasukan-pengeluaran" class="btn btn-danger">Batal</a>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <script>
            function sum() {
                var txtFirstNumberValue = document.getElementById('jumlah_saldo').value;
                var txtSecondNumberValue = document.getElementById('jumlah').value;
                var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
                if (!isNaN(result)) {
                    document.getElementById('saldo').value = result;
                }
            }
        </script>

    @endsection
