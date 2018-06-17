<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{

  protected $guarded = [];

  public function place(){
    return $this->belongsTo('App\Place');
  }
  public function user(){
      return $this->belongsTo('App\User');
    }
}
