<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_mahasiswa extends Model
{
    public function pa(){
    	return $this->hasOne('App\tb_dosen', 'id', 'id_pa');
    }

    public function prodi(){
    	return $this->hasOne('App\tb_prodi', 'id', 'id_prodi');
    }
}
