<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
     public function prodi(){
    return $this->hasOne('App\prodi', 'id', 'id_prodi');
    }
}
