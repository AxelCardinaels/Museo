<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function show($id){
      $user = User::where("id",$id)->with("favoris")->get();
      return response($user, 200);
    }
}
