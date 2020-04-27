<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToTbPengempuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_pengempus', function (Blueprint $table) {
            $table->foreign('id_penawaran_mk')->references('id')->on('tb_penawaranmks');
            $table->foreign('id_dosen')->references('id')->on('tb_dosens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_pengempus', function (Blueprint $table) {
            //
        });
    }
}
