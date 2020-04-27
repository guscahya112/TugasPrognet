<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_matakuliaah extends Model
{
    public function tb_dosen(){
    	return $this->hasOne('App\tb_dosen', 'id', 'id_dosen');
    }

    public function tb_kurikulum(){	
    	return $this->hasOne('App\tb_kurikulum', 'id', 'id_kurikulum');
    }

    public function tb_prodi(){
    	return $this->hasOne('App\tb_prodi', 'id', 'id_prodi');
    }
}
