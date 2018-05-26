<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Achievement;
use Auth, AchievementManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(){
      return view("front.auth.inscription");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      return Validator::make($data, [
          'first_name' => 'required|string|max:255',
          'last_name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6',
      ], [
          'first_name.required' => 'Vous devez renseigner votre prénom.',
          'last_name.required' => 'Vous devez renseigner votre nom.',
          'email.required' => 'Vous devez renseigner une adresse email.',
          'email.email' => 'Votre adresse email n\'est pas valide.',
          'email.unique' => 'Cette adresse email est déjà utilisée.',
          'password_name.required' => 'Vous devez renseigner un mot de passe.',
          'password_name.min' => 'Votre mot de passe doit faire au moins 6 caractères.',
      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        $this->validator($request->all())->validate();
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'avatar' => "img/avatar.jpg",
        ]);

        $achievements = Achievement::all()->pluck("id");
        $user->startedAchievements()->attach($achievements, ["points" => 0]);

        Auth::login($user);

        $newSuccess = AchievementManager::ManageAchievements(Auth::User(), "EarlyBird");

        if($newSuccess[0] == null){
          return redirect("/")->with("status","Votre compte a été créé avec succès !");
        }
        return redirect("/")->with("status","Votre compte a été créé avec succès !")->with("succes", $newSuccess[0]["text"])->with("succes__title", $newSuccess[0]["title"]);
    }
}
