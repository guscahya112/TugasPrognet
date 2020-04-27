<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMatakuliaahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_matakuliaahs', function (Blueprint $table) {
            $table->Increments('id');
            $table->string ('kode_matakuliah',225);
            $table->string ('nama_matakuliah',225);
            $table->integer ('sks');
            $table->integer('semester');
            $table->integer('id_kurikulum')->unsigned();
            $table->integer('id_dosen')->unsigned();
            $table->integer('id_prodi')->unsigned();
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
        Schema::dropIfExists('tb_matakuliaahs');
    }
}
