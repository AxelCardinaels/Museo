<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Place;
use App\Criteria;
use App\Rating;
use App\Category;
use App\Tag;
use App\Day;
use Carbon\Carbon;
use Auth, Redirect, Image, AchievementManager, DB;
use Illuminate\Support\Facades\Validator;

class PlaceController extends Controller
{

  public function show($id){
    $firstFive = Place::orderBy("note", "DESC")->take(5)->get()->pluck("id");
    $place = Place::find($id);
    $criterias = Criteria::where("active",1)->get();
    $notesCriteria = [];

    foreach ($place->completedRatings as $rating){
      foreach ($rating->criterias as $criteria) {
        $row = DB::table('criteria_rating')->where(["rating_id" => $rating->id, "criteria_id" => $criteria->id])->first();
        if(array_key_exists($row->criteria_id, $notesCriteria)){
        }else{
          $notesCriteria[$row->criteria_id] = [];
        }
        array_push($notesCriteria[$row->criteria_id],$row->note);
      }
    }

    foreach($criterias as $criteria) {
      if(array_key_exists($criteria->id, $notesCriteria)){
        $lenght = count($notesCriteria[$criteria->id]);
        $notesCriteria[$criteria->id]["total"] = array_sum($notesCriteria[$criteria->id]);
        $notesCriteria[$criteria->id]["total"] = $notesCriteria[$criteria->id]["total"] / $lenght;
        $notesCriteria[$criteria->id]["infos"] = $criteria;
        $notesCriteria[$criteria->id]["number"] = floor($notesCriteria[$criteria->id]["total"]);
        $notesCriteria[$criteria->id]["decimal"] =  $notesCriteria[$criteria->id]["total"] - abs(floor($notesCriteria[$criteria->id]["total"]));;
      }
    }


    return view("places.show", ["place" => $place, "criterias" => $criterias, "detailledNotes" => $notesCriteria, "firstFive" => $firstFive]);
  }

  public function search(Request $request){

    return view("places.search", [ "search" => $request->search, "datas" => $request->all()]);
  }

  public function add(){
    $categories = Category::where('active',1)->orderBy('title')->get();
    $days = Day::get();
    return view("places.add", ["categories" => $categories, "days" => $days]);
  }

  protected function validator(array $data)
  {
    return Validator::make($data, [
        'name' => 'required|string',
        'adress' => 'required|string|unique:places,adress',
        'state' => 'required',
        'country' => 'required',
        'number' => 'required',
        'main_picture' => 'file|max:2500',
        'category' => 'required',
        'free' => 'required',
        'website' => 'url',
    ], [
        'name.required' => 'Vous devez renseigner le nom du musée.',
        'category.required' => 'Le musée doit avoir une catégorie.',
        'free.required' => 'Les informations de gratuité sont nécessaires.',
        'number.required' => 'L’adresse n’est pas complète ! Elle doit comporter un numéro.',
        'country.required' => 'L’adresse n’est pas complète ! Elle doit comporter un pays.',
        'state.required' => 'L’adresse n’est pas complète ! Elle doit comporter une ville',
        'adress.required' => 'L’adresse n’est pas complète ! Elle doit comporter une rue, un numéro, la ville et le pays.',
        'main_picture.max' => 'Désolé, la photo ne peut pas dépasser les 2,5 Mo !',
        'adress.unique' => 'Cette adresse est déja utilisée. Avez vous vérifiez si ce musée n’existait pas sur le site ?',
        'website.url' => 'Le format de l’adresse du site web n’est pas correct.',

    ]);
  }

  protected function create(Request $request)
  {
      $this->validator($request->all())->validate();
      $place = Place::create([
          'name' => $request['name'],
          'adress' => $request['adress'],
          'state' => $request['state'],
          'country' => $request['country'],
          'city' => $request['city'],
          'description' => $request['description'],
          'category_id' => $request['category'],
          'website' => $request['website'],
          'creator_id' => Auth::User()->id,
      ]);

      $datas = array();
      $geo = explode(",", $request->geo);

      $datas["lat"] = $geo[0];
      $datas["lng"] = $geo[1];
      if($request->hasFile('main_picture')) {
        $main_picture = Image::make($request->file("main_picture"))->resize(1530, null, function ($constraint) {
          $constraint->aspectRatio();
        });
        $extension = $request->file("main_picture")->extension();
        $main_pictureFileName = str_slug($request->get("name"))."-".$place->id.".".$extension;
        $main_picture->save("uploaded/places/".$main_pictureFileName, 50);
        $datas["main_picture"] = "uploaded/places/".$main_pictureFileName;
      }

      if($request->free != 0){
        $datas["freeDay_id"] = $request->free;
      }

      $place->update($datas);

      if($request->allTags != null){
        $tags = explode(",",$request["allTags"]);
        $tagsDatas = [];
        foreach($tags as $tag){
          $array = ["title" => $tag, "place_id" => $place->id, "user_id" => Auth::id(), "created_at" => Carbon::now()->format('Y-m-d H:i:s')];
          array_push($tagsDatas, $array);
        }
        $savedTags = Tag::insert($tagsDatas);
      }

      //Progression des succès et check si l'utilisateur en a débloqué un nouveau
      $newSuccess = AchievementManager::ManageAchievements(Auth::User(), "PlaceCreated");

      if($newSuccess[0] == null){
        return redirect()->route("place.show",["id" => $place->id])->with("status","Le musée a été créé avec succès !");
      }
      return redirect()->route("place.show",["id" => $place->id])->with("status","Le musée a été créé avec succès !")->with("succes", $newSuccess[0]["text"])->with("succes__title", $newSuccess[0]["title"]);
  }

  Public function getBack($id){
    $newSuccess = AchievementManager::ManageAchievements(Auth::User(), "RatingCreated");
    if($newSuccess[0] == null){
      return redirect()->route("place.show",["id" => $id]);
    }
    return redirect()->route("place.show",["id" => $id])->with("succes", $newSuccess[0]["text"])->with("succes__title", $newSuccess[0]["title"]);
  }
}
