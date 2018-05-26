<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];

    public function criterias(){
      return $this->belongsToMany("App\Criteria")->withPivot('note')->withTimestamps();
    }

    public function place(){
      return $this->belongsTo('App\Place');
    }

    public function starsArray(){
      $note = array();
      $note["number"] = floor($this->total);
      $note["decimal"] = abs(floor($this->total) - $this->total);

      return $note;
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->morphMany('App\Like', 'element');
    }

    public function dislikes()
    {
        return $this->morphMany('App\Dislike', 'element');
    }

    public function didUserLiked($id){
      $like = $this->likes()->where('user_id', $id)->first();
      if($like){
        return true;
      }else{
        return false;
      }
    }

    public function didUserDisliked($id){
      $dislike = $this->dislikes()->where('user_id', $id)->first();
      if($dislike){
        return true;
      }else{
        return false;
      }
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'element');
    }
}
