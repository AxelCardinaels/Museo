<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
      $categories = Category::where('active',1)->orderBy('title')->get();
      return response($categories,200);
    }
}
