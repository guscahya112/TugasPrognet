<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_penawaranmk extends Model
{
     public function tb_matakuliah(){
    	return $this->hasOne('App\tb_matakuliah', 'id', 'id_matakuliah');
    }

    public function tb_prodi(){
    	return $this->hasOne('App\tb_prodi', 'id', 'id_prodi');
    }
    public function tb_pengempu(){
    	return $this->belongsTo('App\tb_pengempu');
    }
    public function tb_krs(){
    	return $this->belongsTo('App\tb_krs');
    }
}
