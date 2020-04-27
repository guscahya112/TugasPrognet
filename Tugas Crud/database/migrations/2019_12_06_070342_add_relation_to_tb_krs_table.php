<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToTbKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_krs', function (Blueprint $table) {
            $table->foreign('id_mahasiswa')->references('id')->on('tb_mahasiswas');
            $table->foreign('id_penawaran_mk')->references('id')->on('tb_penawaranmks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_krs', function (Blueprint $table) {
            //
        });
    }
}
