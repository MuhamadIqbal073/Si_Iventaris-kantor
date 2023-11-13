<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengadaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaan', function (Blueprint $table) {
            $table->integer('id_pengadaan');
            $table->string('nama_barang');
            $table->string('merek');
            $table->string('no_kontrak');
            $table->date('tanggal');
            $table->integer('banyaknya_barang');
            $table->integer('harga_satuan');
            $table->integer('jumlah_harga');
            $table->string('keterangan');
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
        Schema::dropIfExists('pengadaan');
    }
}
