<?php

namespace App\Http\Controllers;

use App\Models\PemasukanPengeluaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function semua()
    {
        return view('laporan.semua', [
            'semua' => PemasukanPengeluaran::all()
        ]);
    }

    public function kolekte()
    {
        return view('laporan.pemasukan_kolekte', [
            'kolekte' => PemasukanPengeluaran::where('jenis_id', '1')->get()
        ]);
    }
    public function sumbangan()
    {
        return view('laporan.pemasukan_sumbangan', [
            'sumbangan' => PemasukanPengeluaran::where('jenis_id', '2')->get()

        ]);
    }
    public function pengeluaran()
    {
        return view('laporan.pengeluaran', [
            'pengeluaran' => PemasukanPengeluaran::where('jenis_id', '3')->get()

        ]);
    }
    public function kas()
    {
        return view('kas.index', [
            'kas' => PemasukanPengeluaran::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
