<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\PemasukanPengeluaran;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PemasukanPengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pemasukan-pengeluaran.index', [
            'keuangan' => PemasukanPengeluaran::all()
        ]);
    }
    public function index2()
    {
        return view('pemasukan-pengeluaran.index-pengeluaran', [
            'keuangan' => PemasukanPengeluaran::where('jenis_id', '3')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemasukan-pengeluaran.saldo_awal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keuangan = new PemasukanPengeluaran();
        $keuangan->tgl = $request->tgl;
        $keuangan->jenis_id = $request->jenis_id;
        $keuangan->keterangan = $request->keterangan;
        $keuangan->jumlah = $request->jumlah;
        $keuangan->jumlah_saldo = $request->jumlah_saldo;
        $keuangan->saldo = $request->saldo;
        if ($request->file('bukti_nota')) {
            $file = $request->file('bukti_nota');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('nota', $nama_file);
            $keuangan->bukti_nota = $nama_file;
        }

        $keuangan->save();


        return redirect('/pemasukan-pengeluaran');
    }

    public function pemasukan($id)
    {
        return view('pemasukan-pengeluaran.pemasukan', [
            'pemasukan' => PemasukanPengeluaran::find($id),
            'jenis'     => Jenis::all()
        ]);
    }
    public function pengeluaran($id)
    {
        return view('pemasukan-pengeluaran.pengeluaran', [
            'pengeluaran' => PemasukanPengeluaran::find($id),
            'jenis'     => Jenis::all()
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
