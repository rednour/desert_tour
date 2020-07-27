<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
  public function tours(){

    return $this->hasMany('App\Tour');
  }
}
