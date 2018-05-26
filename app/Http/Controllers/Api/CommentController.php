<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Comment;
use App\Rating;

class CommentController extends Controller
{
    public function create(Request $request){
      $element = Rating::find($request->id);
      $comment = new Comment;
      $comment->user_id = $request->user;
      $comment->comment = $request->comment;

        $element->comments()->save($comment);
        return response($comment,200);
    }

    public function index($element, $user){
      $datas = Comment::where("element_id",$element)->with("likes")->with("dislikes")->with("user")->get();

      foreach($datas as $data){
        $data->liked = $data->didUserLiked($user);
        $data->disliked = $data->didUserDisliked($user);
        $data->humanDate = $data->created_at->diffForHumans();
        $data->comment = nl2br($data->comment);
      }
      return response($datas,200);
    }

    public function show($id, $user){
      $data = Comment::where("id",$id)->with("likes")->with("dislikes")->with("user")->first();
      $data->liked = $data->didUserLiked($user);
      $data->disliked = $data->didUserDisliked($user);
      $data->humanDate = $data->created_at->diffForHumans();
      $data->comment = nl2br($data->comment);
      return response($data,200);
    }
}
