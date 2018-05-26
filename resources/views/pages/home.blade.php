@extends( "partials.front.app" )
@section( "header__class", "header--home header--front" )

@section( "content")

  <div class="header__content header__content--home background--home">
    <span class="header__black"></span>
    <div class="inside__content">
      <div>
        <h2 class="header__title title--header">Découvrez de nouveaux musées, <span class="title__lign">autrement.</span></h2>
        <form class="header__search" action="{{route("place.search")}}" method="get">
          <input type="text" class="header__input" name="search" id="search" placeholder="Pourquoi pas « Liège » ?"/>
          <input type="submit" class="header__submit bouton bouton--search" value="Rechercher"/>
        </form>
      </div>
    </div>
  </div>
</header>

<main>

  <section class="section">
    <div class="intro__container intro__container--centered">
      <h3 class="section__title title--section">Essayez Museo</h3>
      <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam massa elit, interdum at augue et, tristique fermentum lacus. Integer id condimentum dolor. Nunc at erat id ex placerat molestie eget nec lacus. Nullam tellus ex, suscipit quis augue ut.</p>
    </div>

    <ul class="list--steps list-inline">
      <h4 class="hide">Les 3 étapes pour essayer Museo</h4>
      <li class="step__item">
        <img class="step__img" src="{{URL::asset("img/step1.png")}}" alt="Illustration trouvez un musée">
        <h5 class="step__title title--step">Trouvez un musée</h5>
      </li>

      <li class="step__item">
        <img class="step__img" src="{{URL::asset("img/step2.png")}}" alt="Illustration visitez votre sélection">
        <h5 class="step__title title--step">Visitez votre sélection</h5>
      </li>

      <li class="step__item">
        <img class="step__img" src="{{URL::asset("img/step3.png")}}" alt="Illustration partagez avec la communauté">
        <h5 class="step__title title--step">Partagez avec la communauté</h5>
      </li>
    <ul>
  </section>

  <section class="section wrapper--large wrapper--centered">
    <div class="intro__container">
      <h3 class="section__title title--section">Les lieux favoris de nos membres</h3>
    </div>

    <ul class="list--places list-inline">
      @foreach($places as $place)
      <li class="place__item place__item--large">
        <a href="{{route("place.show",["id" => $place->id])}}" class="place__link" title="Afficher la fiche du lieu {{$place->name}}"><span class="hide">Afficher la fiche du lieu {{$place->name}}</span></a>
        <article class="place__article">
          <figure class="place__illustration" style="background-image:url('{{URL::asset($place->main_picture)}}');">
            <figcaption class="hide">Photo du musée {{$place->name}}</figcaption>
          </figure>

          <div class="place__infos">
            <p class="place__city"><img class="city__marker" alt="Icone localisation" src="{{URL::asset("img/icon--marker--black.svg")}}"><span class="city__text">{{$place->state}}</span></p>
            <h4 class="place__title title--place place__title--large">{{$place->name}}</h4>
            <div class="place__ratings clearfix">
              <ul class="ratings__stars list-inline column--left">
                @for($i = 1; $i <= $place->finalNote()["number"]; $i++)
                  <li class="star__item star--large">
                    <img class="star__img" src="{{URL::asset("img/icon--star.svg")}}" alt="Icone étoile de score">
                  </li>
                @endfor

                @if($place->finalNote()["decimal"] >= 0.5)
                  <li class="star__item star--large">
                    <img class="star__img" src="{{URL::asset("img/icon--star--demi.svg")}}" alt="Icone étoile de score">
                  </li>
                @endif
              </ul>
              <p class="ratings__text column--left">{{count($place->ratings)}} avis</p>
            </div>
          </div>
        </article>
      </li>
      @endforeach
    </ul>

    <div class="action__container container--centered">
      <a href="#" class="bouton bouton--large bouton--action" title="Afficher tout le classement des musées">Afficher tout le classement</a>
    </div>
  </section>

  <section class="section wrapper--smallest wrapper--centered clearfix">
    <div class="column--left about__text">
      <h3 class="title--section">Museo, c'est quoi ?</h3>
      <p class="about__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam massa elit, interdum at augue et, tristique fermentum lacus. Integer id condimentum dolor. Nunc at erat id ex placerat molestie eget nec lacus. Nullam tellus ex, suscipit quis augue ut.</p>
      <a href="#" class="bouton bouton--large" title="Aller à la page 'à propos'">En savoir plus</a>
    </div>

    <img class="about__img column--right" src="{{URL::asset("img/about.png")}}" alt="Image a propos"/>
  </section>
@endsection
