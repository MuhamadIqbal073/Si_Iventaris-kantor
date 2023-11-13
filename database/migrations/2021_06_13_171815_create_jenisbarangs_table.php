<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisbarang', function (Blueprint $table) {
            $table->integer('id_jenisbarang');
            $table->string('no_pabrik');
            $table->string('no_rangka');
            $table->string('no_mesin');
            $table->string('no_polisi');
            $table->string('no_bpkb');
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
        Schema::dropIfExists('jenisbarang');
    }
}
