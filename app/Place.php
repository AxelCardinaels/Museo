<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $guarded = [];


    public function user(){
      return $this->hasOne('App\User', 'id', 'creator_id')->withTrashed();
    }

    public function category(){
      return $this->BelongsTo('App\Category');
    }

    public function lovers(){
      return $this->belongsToMany("App\User", 'user_favorite_place', 'place_id', 'user_id');
    }

    public function ratings(){
      return $this->hasMany('App\Rating');
    }

    public function tags(){
      return $this->hasMany('App\Tag');
    }

    public function completedRatings(){
      return $this->hasMany('App\Rating')->where("completed",1);
    }

    public function showableRatings(){
      return $this->hasMany('App\Rating')->where("completed",1)->where("avis","!=",null);
    }
    public function numeralNote(){
      return ($this->completedRatings->sum('total'))/count($this->completedRatings);
    }
    public function finalNote(){
      if($this->completedRatings->isEmpty()){
        $note["number"] = 0;
        $note["decimal"] = 0;
        return $note;
      }
      $note["number"] = ($this->completedRatings->sum('total'))/count($this->completedRatings);
      $note["decimal"] = abs(floor($note["number"]) - $note["number"]);
      $note["number"] = floor($note["number"]);

      return $note;
    }
}
