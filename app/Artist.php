<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table='artists';

    public function albums(){

    	return $this->hasMany('App\Album');
  }

  public function songs(){

    	return $this->hasMany('App\Song');
  }
  
}
