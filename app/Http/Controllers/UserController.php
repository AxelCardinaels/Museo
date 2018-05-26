<?php

namespace App\Http\Controllers;
use App\User;
use App\Country;
use Auth, Image, Date, AchievementManager;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;


class UserController extends Controller
{

  protected function validator(array $data)
  {
    return Validator::make($data, [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'avatar' => 'image|max:2000'
    ], [
        'first_name.required' => 'Vous devez renseigner votre prénom.',
        'last_name.required' => 'Vous devez renseigner votre nom.',
        'email.required' => 'Vous devez renseigner une adresse email.',
        'email.email' => 'Votre adresse email n\'est pas valide.',
        'avatar.image' => 'Le fichier doit être une image',
        'avatar.max' => 'Le fichier ne peut pas dépasser 2 Mo',

    ]);
  }

    public function show($id){
      $user = User::find($id);
      return view("users.show", ["user" => $user]);
    }

    public function edit(){
      $user = Auth::User();
      $countries = Country::Orderby("name_fr")->get();
      return view("compte.edit", ["user" => $user, "countries" => $countries]);
    }

    public function remove(){
      $user = Auth::User();
      return view("compte.delete", ["user" => $user]);
    }

    public function delete(Request $request){
      $user = Auth::User();
        if(Hash::check($request->password, $user->password)) {
          Auth::logout();
          $user->delete();

          return redirect("/")->with("status", "Votre compte a bien été supprimé. Vous nous manquerez beaucoup !");
        }else{
          $errors = ["Le mot de passe entré est incorrect."];
          return redirect()->back()->withErrors($errors);
        }
    }

    public function update(Request $request){
      $this->validator($request->all())->validate();
      $user = Auth::User();
      $datas = Input::All();


      if($request->hasFile('avatar')) {
        $avatar = Image::make($request->file("avatar"));
        $extension = $request->file("avatar")->extension();
        $avatarFileName = str_slug($request->get("first_name")." ".$request->get("last_name"))."-".$user->id.".".$extension;
        $avatar->fit(200)->save("uploaded/avatars/".$avatarFileName);
        $datas["avatar"] = "uploaded/avatars/".$avatarFileName;
      }


      if($datas["description"] == "Votre description"){
        $datas["description"] = null;
      }

      $user->update($datas);

      return Redirect()->Back()->with("status", "Vos informations ont été mises à jour !");
    }

    public function createFavoris($id){
      Auth::user()->favoris()->attach($id);
      return redirect()->back()->with("status", "Le musée a bien été ajouté à vos favoris !");
    }

    public function deleteFavoris($id){
      Auth::user()->favoris()->detach($id);
      return redirect()->back()->with("status", "Le musée a bien été rétiré de vos favoris !");
    }
}
