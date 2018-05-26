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

    $places = $query->with("ratings")->get();

    foreach($places as $place){
      $place->stars = $place->finalNote();
    };
    return response($places, 200);
  }

}
