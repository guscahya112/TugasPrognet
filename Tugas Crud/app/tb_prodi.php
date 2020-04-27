<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_prodi extends Model
{
     public function tb_dosen(){
    	return $this->belongsTo('App\tb_dosen');
    }
     public function tb_krs(){
    	return $this->belongsTo('App\tb_krs');
    }
     public function tb_kurikulum(){
    	return $this->belongsTo('App\tb_kurikulum');
    }
     public function tb_mahasiswa(){
    	return $this->belongsTo('App\tb_mahasiswa');
    }
     public function tb_matakuliaah(){
    	return $this->belongsTo('App\tb_matakuliaah');
    }
     public function tb_penawaranmk(){
    	return $this->belongsTo('App\tb_penawaranmk');
    }
}
