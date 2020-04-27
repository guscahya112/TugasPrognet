<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_pengempu extends Model
{
     public function tb_penawaranmk(){
    	return $this->hasOne('App\tb_penawaranmk', 'id', 'id_penawaranmk');
    }
     public function tb_dosen(){
    	return $this->hasOne('App\tb_dosen', 'id', 'id_dosen');
    }
}
