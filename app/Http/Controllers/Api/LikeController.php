<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Like;
use App\Dislike;
use App\Rating;
use App\Comment;

class LikeController extends Controller
{
    public function like(Request $request){
      if($request->type_name == "rating"){
        $element = Rating::find($request->id);
      }
      if($request->type_name == "comment"){
        $element = Comment::find($request->id);
      }

      $like = new Like;
      $like->user_id = $request->user;
      if($element->didUserLiked($request->user)){
        $element->likes()->delete($like);
      }else{
        if($element->didUserDisliked($request->user)){
          $dislike = new Dislike;
          $dislike->user_id = $request->user;
          $element->dislikes()->delete($dislike);
        }
        $element->likes()->save($like);
        return response([count($element->likes), "removeDislike"],200);
      }
      return response([count($element->likes)],200);
    }
}
