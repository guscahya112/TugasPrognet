<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_kurikulum extends Model
{
    public function tb_prodi(){
    	return $this->hasOne('App\tb_prodi', 'id', 'id_prodi');
    }

    public function tb_matakuliaah(){
    	return $this->belongsTo('App\tb_matakuliaah', 'id_matakuliaah');
    }
}
