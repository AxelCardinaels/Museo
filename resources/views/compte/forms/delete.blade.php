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
      <form  role="form" method="POST" action="{{route("user.delete")}}" class="" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset class="form__part">
          <div class="form__input clearfix">
            <label class="label--sided" for="last_name">Mot de passe</label>
            <input type="password" class="input--text input--classic input--sided" name="password" id="password" placeholder="Votre mot de passe"/>
          </div>
        </fieldset>

            <div class="form__input clearfix">
              <label class="label--sided"></label>
              <button type="submit" class="bouton bouton--small bouton--danger bouton--form form__submit">
                Supprimer mon compte
              </button>
          </div>


      </form>
    </div>
  </div>
</div>
