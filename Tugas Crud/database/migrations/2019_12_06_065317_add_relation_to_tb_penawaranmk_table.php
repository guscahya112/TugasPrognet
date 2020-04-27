<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToTbPenawaranmkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_penawaranmks', function (Blueprint $table) {
            $table->foreign('id_matakuliah')->references('id')->on('tb_matakuliaahs');
            $table->foreign('id_prodi')->references('id')->on('tb_prodis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_penawaranmks', function (Blueprint $table) {
            //
        });
    }
}
