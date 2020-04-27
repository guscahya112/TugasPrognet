<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_krs', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_mahasiswa')->unsigned();
            $table->integer('id_penawaran_mk')->unsigned();
            $table->string('nilai_huruf');  
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
        Schema::dropIfExists('tb_krs');
    }
}
