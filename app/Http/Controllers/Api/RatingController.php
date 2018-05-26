<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Place;
use App\Rating;
use App\Criteria;

class RatingController extends Controller
{
  protected function validator(array $data)
  {
    $validator = Validator::make($data, [
        'title' => 'required|string',
    ], [
        'title.required' => 'Vous devez donner un titre à votre évaluation.',

    ]);

    if($validator->fails()) {
      return response()->json(['errors'=>$validator->errors()]);
    }else{
      return "validated";
    }

  }

  public function create(Request $request){
    $validation = $this->validator($request->all());
    if($validation != "validated"){
      return $validation;
    }else{
      $rating = Rating::create([
        'title' => $request->title,
        'user_id' => $request->user_id,
        'place_id' => $request->place_id,
      ]);

      $datas = array();

      if($request->avis == "Ici, vous pouvez décrire votre expérience plus en détails si vous le souhaitez !"){
        $datas["avis"] = null;
      }else{
        $datas["avis"] = $request->avis;
      }

      $rating->update($datas);

      return response($rating, 200);
    }
  }

  public function addCriteria(Request $request){

    $rules = [
      'note' => 'required'
    ];

    $messages = [
      'note.required' => 'Vous devez donnez un nombre d’étoile au critère.',
    ];

    $validator = Validator::make($request->all(),$rules, $messages);

    if ($validator->fails()){
        return response()->json(['errors'=>$validator->errors()]);
      }else{
        $rating = Rating::find($request->rating_id);
        $rating->criterias()->attach($request->criteria_id,["note" => $request->note]);

        if($request->completed){
          $total = [];
          foreach($rating->criterias as $criteria){
            array_push($total, $criteria->pivot->note);
          }

          $rating->update(["completed" => 1, "total" => (array_sum($total))/count($rating->criterias)]);
          $place = Place::find($rating->place_id);
          $place->update(["note" => $place->numeralNote()]);
          return response($rating, 200);
        }
        return response($rating, 200);
      }
  }
}
