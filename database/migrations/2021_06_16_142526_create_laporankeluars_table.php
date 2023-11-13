<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporankeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporankeluar', function (Blueprint $table) {
            $table->integer('id_laporankeluar');
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->string('merk');
            $table->string('ukuran');
            $table->string('bahan');
            $table->date('tanggal');
            $table->string('no_pabrik');
            $table->string('no_rangka');
            $table->string('no_mesin');
            $table->string('no_polisi');
            $table->string('no_bpkb');
            $table->string('asal_usul');
            $table->integer('banyaknya_barang');
            $table->double('harga_satuan', 10,2);
            $table->double('jumlah_harga', 10,2);
            $table->string('kode_penanggung_jawab');
            $table->string('keterangan');
            $table->string('penerima');
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
        Schema::dropIfExists('laporankeluar');
    }
}
