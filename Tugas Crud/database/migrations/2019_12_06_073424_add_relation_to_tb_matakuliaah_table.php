<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToTbMatakuliaahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_matakuliaahs', function (Blueprint $table) {
        $table->foreign('id_dosen')->references('id')->on('tb_dosens');
        $table->foreign('id_prodi')->references('id')->on('tb_prodis');
        $table->foreign('id_kurikulum')->references('id')->on('tb_kurikulums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_matakuliaahs', function (Blueprint $table) {
            //
        });
    }
}
