<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function element()
  {
      return $this->morphTo();
  }

  public function user(){
    return $this->belongsTo("App\User");
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
}
