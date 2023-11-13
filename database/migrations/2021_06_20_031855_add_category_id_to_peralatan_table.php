<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPeralatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peralatan', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('id_peralatan');

            $table->index('category_id');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peralatan', function (Blueprint $table) {
            //
        });
    }
}
