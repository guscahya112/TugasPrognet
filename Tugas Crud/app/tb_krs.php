<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_krs extends Model
{
     public function tb_mahasiswa(){
    	return $this->hasOne('App\tb_mahasiswa', 'id', 'id_mahasiswa');
    }
     public function tb_penawaranmk(){
    	return $this->hasOne('App\tb_penawaranmk', 'id', 'id_penawaranmk');
    }
    

}
