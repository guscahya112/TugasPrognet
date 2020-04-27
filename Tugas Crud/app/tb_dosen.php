<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_dosen extends Model
{
     public function tb_prodi(){
    	return $this->hasOne('App\tb_prodi', 'id', 'id_prodi');
    }

    public function tb_mahasiswa(){
    	return $this->belongsTo('App\tb_mahasiswa');
    }
     public function tb_matakuliah(){
    	return $this->belongsTo('App\tb_matakuliah');
    }
     public function tb_pengempu(){
    	return $this->belongsTo('App\tb_pengempu');
    	
    }
}
