@extends( "partials.front.app" )
@section( "content")
@section( "footer__class", "footer--compte" )

</header>
<main class="main--compte">

  <section class="wrapper--centered wrapper--small clearfix">

    <div class="compte__acces column--left">
      <div class="compte__recap">
        <figure class="recap__img" style="background-image:url('{{URL::asset($user->avatar)}}');">
          <figcaption class="hide">Votre photo de profil</figcaption>
        </figure>

        <div class="recap__infos" >
          <h2 class="title--recap"><span class="hide">Informations de </span>{{$user->first_name}} {{$user->last_name}}</h2>
          <p class="recap__title">Rockstar des avis</p>
        </div>
      </div>
      @include( "partials.compte.menu" )
    </div>

    <div class="compte__edit column--right">
      <h3 class="title--sticky">Supprimer mon compte</h3>
      @include( "compte.forms.delete" )
    </div>
  </section>


@endsection
