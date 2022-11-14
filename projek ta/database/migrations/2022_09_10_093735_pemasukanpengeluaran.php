<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemasukanpengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukan_pengeluaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_id')->references('id')->on('jenis');
            $table->date('tgl');
            $table->string('keterangan')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('jumlah_saldo')->nullable();
            $table->string('saldo')->nullable();
            $table->string('bukti_nota')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasukan_pengeluaran');
    }
}
