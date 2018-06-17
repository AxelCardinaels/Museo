<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Claim;

class ClaimController extends Controller
{
    public function create(Request $request){

      $claim = New Claim;
      $claim->user_id = $request->user_id;
      $claim->place_id = $request->place_id;
      $claim->comment = $request->comment;

      $claim->save();
      return response($claim,200);
    }
}
