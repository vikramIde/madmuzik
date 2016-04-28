<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $table='songs';

   
public function artist(){

    return $this->belongsTo('App\Artist');
  }

  public function album(){

    return $this->belongsTo('App\Album');
  }

}
