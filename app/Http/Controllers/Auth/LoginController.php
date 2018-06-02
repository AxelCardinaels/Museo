<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth, Redirect, Socialite;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
      $this->middleware('guest', ['except' => ['doLogout', 'getLogout']]);
    }

    public function login(){
      return view("front.auth.connexion");
    }

    public function doLogin(Request $request){
      $rules = [
        'email' => 'required|exists:users,email|email',
        'password' => 'required',
      ];

      $messages = [
        'email.required' => 'Vous devez entrer une adresse email.',
        'email' => 'L’adresse email doit être au format exemple@test.com.',
        'exists' => 'Cette adresse email ne se trouve pas dans notre base de données',
        'password.required' => 'Vous devez entrer une mot de passe.',
      ];

      $validator = Validator::make($request->all(),$rules, $messages);

      if ($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                return redirect()->intended('/')->with('status', 'Vous êtes maintenant connecté!');
            }else{
              $errors = ["Le mot de passe est incorrect."];
              return redirect()->back()->withErrors($errors)->withInput();
            }
        }
    }

    public function doLogout(){
      Auth::logout();
      return redirect("/")->with('status', 'Vous êtes maintenant déconnecté!');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        dd($user);
    }

}
