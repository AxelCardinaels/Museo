<div class="compte__form">
  <div class="form__content">
    @if (count($errors) > 0)
      <div class="">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    <div class="form__section">
      <form  role="form" method="POST" action="{{route("user.update")}}" class="" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="compte__picture-container uploaded-picture__container" style="background-image:url('{{URL::asset($user->avatar)}}');">
          <img class="picture__icon" src="{{URL::asset("img/icon--photo.svg")}}" alt="Icone appareil photo"/>
          <span class="picture__dark"></span>
          <input type="file" name="avatar" id="avatar" class="input--upload-img upload-img--compte reactive-upload" accept="image/*"/>
        </div>

        <fieldset class="form_part part--success">
          <h3 class="subtitle--form">Choisissez votre titre</h3>
          @foreach(Auth::User()->unlockedAchievements as $success)
            <label class="success--label @if($user->achievement_id == $success->id) success--selected @endif" for="success-{{$success->id}}" style="background-image:url('{{URL::asset($success->icon)}}');"><input type="radio" name="achievement_id" id="success-{{$success->id}}" class="radio--success hide" value="{{$success->id}}"/></label>
          @endforeach
        </fieldset>
        <fieldset class="form__part">
          <div class="form__input clearfix">
            <label class="label--sided" for="last_name">Nom</label>
            <input type="text" class="input--text input--classic input--sided" name="last_name" id="last_name" value="{{$user->last_name}}" placeholder="Votre nom"/>
          </div>
          <div class="form__input clearfix">
            <label class="label--sided" for="first_name">Prénom</label>
            <input type="text" class="input--text input--classic input--sided" name="first_name" id="first_name" value="{{$user->first_name}}" placeholder="Votre prénom"/>
          </div>
          <div class="form__input clearfix">
            <label class="label--sided label--secret" for="email">Adresse email <img src="{{URL::asset('img/icon--secret.svg')}}" alt="Icone secret" class="form__secret"/></label>
            <input type="email" disabled class="input--text input--classic input--sided" name="email" id="email" value="{{$user->email}}" placeholder="Votre adresse email"/>
          </div>

          <div class="form__input clearfix">
            <label class="label--sided label--secret" for="phone">Téléphone <img src="{{URL::asset('img/icon--secret.svg')}}" alt="Icone secret" class="form__secret"/></label>
            <input type="text" class="input--text input--classic input--sided" name="phone" id="phone" value="{{ ($user->phone) ? $user->phone : "" }}" placeholder="Votre numéro de téléphone"/>
          </div>
        </fieldset>

        <fieldset class="form__part">
          <div class="form__input clearfix">
            <label class="label--sided label--secret">Sexe <img src="{{URL::asset('img/icon--secret.svg')}}" alt="Icone secret" class="form__secret"/></label>
            <select class="input--classic input--sided" name="sex" id="sex">
              <option selected disabled>Sélectionnez votre sexe</option>
              <option {{ ($user->sex == 1) ? "selected" : "" }} value="1">Homme</option>
              <option {{ ($user->sex == 2) ? "selected" : "" }} value="2">Femme</option>
              <option {{ ($user->sex == 3) ? "selected" : "" }} value="3">Non-applicable</option>
            </select>
          </div>
          <div class="form__input clearfix">
            <label class="label--sided label--secret" for="birthday">Anniversaire <img src="{{URL::asset('img/icon--secret.svg')}}" alt="Icone secret" class="form__secret"/></label>
            <input type="date" class="input--text input--classic input--sided" name="birthday" id="birthday" value="{{ ($user->birthday) ? date('Y-m-d',strtotime($user->birthday)) : "" }}" placeholder="Votre date de naissance"/>
          </div>
        </fieldset>

        <fieldset class="form__part">
          <div class="form__input clearfix">
            <label class="label--sided label--secret">Pays <img src="{{URL::asset('img/icon--secret.svg')}}" alt="Icone secret" class="form__secret"/></label>
            <select class="input--classic input--sided" name="country_id" id="country_id">
            <option selected disabled>Sélectionnez votre pays</option>
            @foreach($countries as $country)
              <option value="{{$country->id}}" {{ ($user->country_id == $country->id) ? "selected" : "" }}>{{$country->name_fr}}</option>
            @endforeach
          </select>
          </div>
          <div class="form__input clearfix">
            <label class="label--sided label--secret" for="city">Ville <img src="{{URL::asset('img/icon--secret.svg')}}" alt="Icone secret" class="form__secret"/></label>
            <input type="text" class="input--text input--classic input--sided" name="city" id="city" value="{{ ($user->city) ? $user->city : "" }}" placeholder="Votre ville"/>
          </div>
        </fieldset>


          <fieldset class="form__part">
            <div class="form__input clearfix">
              <label class="label--sided" for="description">Description</label>
            <textarea class="input--textarea input--classic input--sided" name="description" placeholder="Votre description" id="description">{{($user->description)}}</textarea>
          </div>
          </fieldset>

            <div class="form__input clearfix">
              <label class="label--sided"></label>
              <button type="submit" class="bouton bouton--small bouton--form form__submit">
                Sauvegarder mes informations
              </button>
          </div>


      </form>
    </div>
  </div>
</div>
