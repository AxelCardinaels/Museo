@extends( "partials.front.app" )
@section("menu__class", "menu--inside")
@section( "content")

</header>
<main>

  <section class="section">
    <div class="intro__container intro__container--centered">
      <h3 class="section__title title--section">Rejoignez Museo</h3>
      <p class="section__subtitle">Afin de profiter de toutes les possibilités de Museo, il vous suffit de vous inscrire. Cela prend 5 minutes maximum, promis!</p>
    </div>

    <img src="{{URL::asset("img/connexion.png")}}" alt="Image connexion" class="login__img"/>

    @include("front.auth.forms.register")
  </section>


@endsection
