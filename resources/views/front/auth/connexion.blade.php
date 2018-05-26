@extends( "partials.front.app" )
@section("menu__class", "menu--inside")
@section( "content")

</header>
<main>

  <section class="section">
    <div class="intro__container intro__container--centered">
      <h3 class="section__title title--section">Me connecter à mon compte</h3>
      <p class="section__subtitle">Heureux de vous revoir parmis nous !</p>
    </div>

    <img src="{{URL::asset("img/connexion.png")}}" alt="Image connexion" class="login__img"/>

    @include("front.auth.forms.login")
  </section>


@endsection
