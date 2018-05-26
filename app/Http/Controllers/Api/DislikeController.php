<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Dislike;
use App\Like;
use App\Rating;
use App\Comment;

class DislikeController extends Controller
{
  public function dislike(Request $request){

    if($request->type_name == "rating"){
      $element = Rating::find($request->id);
    }
    if($request->type_name == "comment"){
      $element = Comment::find($request->id);
    }
    $dislike = new Dislike;
    $dislike->user_id = $request->user;
    if($element->didUserDisliked($request->user)){
      $element->dislikes()->delete($dislike);
    }else{
      if($element->didUserLiked($request->user)){
        $like = new Like;
        $like->user_id = $request->user;
        $element->likes()->delete($like);
      }
      $element->dislikes()->save($dislike);
      return response([count($element->likes), "removeLike"],200);
    }
    return response([count($element->likes)],200);
  }

}
