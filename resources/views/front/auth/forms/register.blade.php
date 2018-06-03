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

      <!--
    <div class="form__section section--followed">
        <a href="{{route("auth.facebook")}}" title="M'inscrire avec Facebook" class="bouton bouton--large  bouton--full bouton--facebook">M'inscrire avec Facebook</a>
    </div>
      <p class="form__separator">Ou alors</p>

    -->

    <div class="form__section">
      <form  role="form" method="POST" action="{{route("auth.user.create")}}" class="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="email" class="input--text input--classic input--full" name="email" id="email" value="{{old('email')}}" placeholder="Votre adresse email"/>
        <input type="text" class="input--text input--classic input--full" name="first_name" id="first_name" value="{{old('first_name')}}" placeholder="Votre prénom"/>
        <input type="text" class="input--text input--classic input--full" name="last_name" id="last_name" value="{{old('last_name')}}" placeholder="Votre nom"/>
        <input type="password" class="input--text input--classic input--full" name="password" id="password" value="" placeholder="Votre mot de passe"/>
        <button type="submit" class="bouton bouton--large bouton--full bouton--form form__submit">
          M'inscrire par email
        </button>
      </form>
    </div>
  </div>
</div>
