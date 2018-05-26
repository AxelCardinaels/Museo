<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PageController extends Controller
{
    public function home(){
      $places = Place::orderBy("note","DESC")->take(4)->get();
      return view("pages.home",["places" => $places]);
    }

}
