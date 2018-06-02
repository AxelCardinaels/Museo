<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Place;


class PlaceController extends Controller
{
  public function search(Request $request){
    $query = New Place;
    $query->newQuery();

    if($request->search){
      $search = $request->search;
      $query = $query->where(function($query) use ($search){
                $query->Where('adress', 'LIKE', '%'.$search.'%')->Orwhere('state', 'LIKE', '%'.$search.'%')->Orwhere('name', 'LIKE', '%'.$search.'%')->Orwhere('country', 'LIKE', '%'.$search.'%');
      });
    }

    if($request->category){
      $category = $request->category;
      $query = $query->where(function($query) use ($category){
        $query->where("category_id", $category);
      });
    }

    if($request->note){
      $note = $request->note;
      $query = $query->where(function($query) use ($note){
        $query->where("note",">=", $note);
      });
    }

    $places = $query->orderBy("note", "DESC")->with("ratings")->get();

    foreach($places as $place){
      $place->stars = $place->finalNote();
    };
    return response($places, 200);
  }

}
