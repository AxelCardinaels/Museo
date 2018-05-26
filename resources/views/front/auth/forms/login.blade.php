<div class="form__front">
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
    <div class="form__section section--followed">
        <a href="#" title="Se connecter avec Facebook" class="bouton bouton--large  bouton--full bouton--facebook">Me connecter avec Facebook</a>
    </div>
      <p class="form__separator">Ou alors</p>

    <div class="form__section">
      <form  role="form" method="POST" action="{{route("auth.login")}}" class="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="email" class="input--text input--classic input--full" name="email" id="email" value="{{old('email')}}" placeholder="Votre adresse email"/>
        <input type="password" class="input--text input--classic input--full" name="password" id="password" value="" placeholder="Votre mot de passe"/>

        <label class="label--checkbox" for="remember"><input type="checkbox" id="remember" name="remember" class="label__checkbox"/>Souvenez-vous de moi !</label>
        <button type="submit" class="bouton bouton--large bouton--full bouton--form form__submit">
          Me connecter par email
        </button>
      </form>
    </div>
  </div>
</div>
