<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
      public function mahasiswa(){
    	return $this->belongsTo('App\mahasiswa');
    }
}
