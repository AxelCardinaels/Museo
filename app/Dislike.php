<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
  public function element()
  {
      return $this->morphTo();
  }
}
