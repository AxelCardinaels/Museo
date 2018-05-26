@extends( "partials.front.app" )
@section("body__class", "vue--search")
@section( "header__class", "header--search" )
@section("menu__class", "menu--inside")

@section( "content")
  <h2 class="hide">Recherche de lieux pour le terme {{$search}}</h2>

  <div class="wrapper--large wrapper--centered">
    <form class="search__form" action="{{route("place.search")}}" method="get">
      <input type="text" class="search__bar" name="search" id="search" placeholder="Que cherchez vous ?" value="{{$search}}"/>
    </form>

    <div class="filter__container clearfix">

      <ul class="filters__list list--filters list-inline column--left">
        @if(isset($datas["search"]))
          <li class="filter__item">
            <a href="#" class="bouton bouton--small category--searched" title="Supprimer le filtre">{{$datas["search"]}}</a>
          </li>
        @endif
        <li class="filter__item">
          <a href="#" class="bouton bouton--small category--searched" v-if="category != '' && filters == true" title="Supprimer le filtre de catégorie">@{{categories[category - 1].title}}</a>
        </li>
      </ul>

      <div class="column--right">
        <a href="#" class="bouton bouton--small" title="Ajouter des filtres" @click="hideFilters()" data-remodal-target="modal-search">Ajouter des filtres</a>
      </div>
    </div>
  </div>
</header>

<main>

<section class="">
  <div class="wrapper--large wrapper--centered">
  <h3 class="hide">Carte des résultats</h3>
  <div class="search__map">
    <div id="search__map" class="map">
    </div>

    <a class="bouton bouton--map bouton--header map__enlarge" href="#" title="Afficher la grande carte">
      <img class="map__icon icon--enlarge" src="{{URL::asset("img/icon--enlarge.svg")}}" alt="Icone agrandir la carte"/>
      <span class="map__text">Grande carte</span>
      <span class="map__text hide">Petite carte</span>
    </a>
  </div>
  </div>

  <div class="search__places wrapper--places wrapper--centered">
    <h3 class="section__title title--section title--sided">Il y a @{{markers.length}} résultats</h3>

    <ul class="list-inline">
      <li class="place__item place__item--small" v-for="marker in markers">
        <a :href="'{{URL::to("/")}}/lieux/'+ marker.id" class="place__link" target="_blank" :title="'Afficher la fiche du lieu ' + marker.name"><span class="hide">Afficherla fiche du lieu @{{marker.name}}</span></a>
        <article class="place__article">
          <figure class="place__illustration" :style="{ backgroundImage: 'url({{URL::to("/")}}/' + marker.main_picture + ')' }">
            <figcaption class="hide">Photo du lieu @{{marker.name}}</figcaption>
          </figure>

          <div class="place__infos">
            <p class="place__city"><img class="city__marker" alt="Icone localisation" src="{{URL::asset("img/icon--marker--black.svg")}}"><span class="city__text">@{{marker.state}}</span></p>
            <h4 class="place__title title--place place__title--large">@{{marker.name}}</h4>
            <div class="place__ratings clearfix">
              <ul class="ratings__stars list-inline column--left">
                  <li class="star__item star--larger" v-for="n in marker.stars.number">
                    <img class="star__img" src="{{URL::asset("img/icon--star.svg")}}" alt="Icone étoile de score">
                  </li>

                  <li class="star__item star--larger" v-if="marker.stars.decimal >= 0.5">
                    <img class="star__img" src="{{URL::asset("img/icon--star--demi.svg")}}" alt="Icone étoile de score">
                  </li>
              </ul>

              <p class="ratings__text column--left">@{{marker.ratings.length}} avis</p>
            </div>
          </div>
        </article>
      </li>
    </ul>
  </div>
</section>

<div data-remodal-id="modal-search" class="remodal">
  <div class="modal__inside modal--unpadded wrapper--modal wrapper--modal--large wrapper--centered">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="modal__box">
      <h3 class="section--title">Ajouter des filtres</h3>
      <form class="search__filters" action="{{route("place.search")}}" method="get" v-on:submit.prevent="getMarkers()">
        <input type="hidden" name="search" id="search" value="{{$search}}"/>
        <select class="input--text input--classic input--full" name="category" id="category" required v-model="category" >
          <option value="" disabled>La catégorie du musée</option>
          <option v-for="category in categories" :value="category.id">@{{category.title}}</option>
        </select>
        <input type="submit" id="submit-search" class="hide" tabIndex="-1"/>
      </form>

    </div>

    <button class="button__modal--fake" title="Filtrer les résultats"><label for="submit-search" class="button__label modal__close" tabindex="0">Filtrer les résultats</label></button>
  </div>
</div>


@endsection
