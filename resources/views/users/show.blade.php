@extends( "partials.front.app" )
@section( "header__class", "header--user vue--user" )
@section( "content")



  <span class="hide user-id">{{$user->id}}</span>
  <div id="user__map" class="user__map">
  </div>

  <div class="user__boutons">
    <a class="bouton bouton--header user__map--enlarge" href="#" title="Afficher la grande carte des musées favoris de {{$user->first_name}}">
      <img class="map__icon icon--enlarge" src="{{URL::asset("img/icon--enlarge.svg")}}" alt="Icone agrandir la carte"/>
      <span class="map__text">Grande carte des musées favoris de {{$user->first_name}}</span>
      <span class="map__text hide">Petite carte des musées favoris de {{$user->first_name}}</span>
    </a>
  </div>
</header>

<main>

<section class="wrapper--fiche wrapper--centered clearfix">
  <div class="column--left user__infos">
    <div class="fiche__title">
      <div class="user__picture">
        <figure class="user__img" style="background-image:url('{{URL::asset($user->avatar)}}');">
          <figcaption class="hide">Photo de profil de {{$user->fullName()}}</figcaption>
        </figure>

        @if($user->achievement_id)<img class="user__icon" src="{{URL::asset($user->title->icon)}}" alt="Icone du titre {{$user->title->title}}"> @endif

      </div>

      <h2 class="section__title title--section">{{$user->fullName()}}</h2>
      <p class="user__title">@if($user->achievement_id){{$user->title->title}} @else Novice @endif</p>
    </div>

    <div class="user__description">
      <h3 class="hide">Description de {{$user->first_name}}</h3>
      @if($user->description)
        <p>{{$user->description}}</p>
      @else
        <p>{{$user->first_name}} n'a pas encore ajouté de description.</p>
      @endif
    </div>

    <div class="fiche__commentaires">
      <h3 class="section__subtitle subtitle--spaced">Avis ajoutés par {{$user->first_name}} ({{count($user->completedRatings)}})</h3>

      <ul class="list--user-reviews list-inline">
        @if($user->completedRatings->count() > 0)
          @foreach($user->completedRatings as $rating)
            <li class="comment__item">
              <article class="comment__article clearfix">
                <figure class="column--left comment__face" style="background-image:url('{{URL::asset($user->avatar)}}');">
                  <figcaption class="hide">Photo de l'utilisateur {{$user->fullName()}}</figcaption>
                </figure>

                <div class="column--right comment__texts">
                  <h4 class="comment__title title--comment">{{$rating->title}}</h4>
                  <ul class="comment__stars list-inline">
                    @for($i = 1; $i <= $rating->starsArray()["number"]; $i++)
                      <li class="star__item star--large">
                        <img class="star__img" src="{{URL::asset("img/icon--star.svg")}}" alt="Icone étoile de score">
                      </li>
                    @endfor

                    @if($rating->starsArray()["decimal"] >= 0.5)
                      <li class="star__item star--large">
                        <img class="star__img" src="{{URL::asset("img/icon--star--demi.svg")}}" alt="Icone étoile de score">
                      </li>
                    @endif
                  </ul>

                  <p class="comment__by">Concernant <a href="{{route("place.show",["id" => $rating->place->id])}}" class="link--simple" title="Afficher la fiche du musée">{{$rating->place->name}}</a> {{ $rating->created_at->diffForHumans() }}</p>

                  <div class="comment__text">
                    <div class="comment__comment user__comment">
                      <p>{!! nl2br(e($rating->avis)) !!}</p>
                    </div>
                  </div>

                  @if($rating->avis)
                    <!--<a href="#" class="bouton bouton--small bouton--comments" title="Voir l'avis">Voir l'avis</a>-->
                  @endif

                </div>
              </article>
            </li>
          @endforeach
        @else
          <li>Désolé, {{$user->first_name}} n'a pas encore ajouté d'avis sur le site !</li>
        @endif
      </ul>
    </div>
  </div>

  <div class="column--right user__stats">
    <div class="user__trophies">
      <h3 class="section__subtitle subtitle--section">Titres débloquées par {{$user->first_name}}</h3>
      <p>Les récompenses et status sont attribuées suite à des actions que vous réalisez sur le site. N’hésitez pas à contribuer régulièrement pour en débloquer de nouvelles !</p>

      <ul class="list--trophies user__trophies list-inline">

        @if($user->unlockedAchievements->count() > 0)
          @foreach($user->unlockedAchievements as $achievement)
          <li class="trophy__item">
            <div class="trophy__description">
              <h4 class="title--trophy">{{$achievement->title}}</h4>
              <p class="trophy__text">{{$achievement->description}}</p>
            </div>
            <img class="trophy__img" src="{{URL::asset($achievement->icon)}}" alt="Icone du titre {{$achievement->title}}">
          </li>
          @endforeach
        @else
          <li>Désolé, {{$user->first_name}} n'a pas encore débloqué de titres !</li>
        @endif

      </ul>
    </div>

    <div class="user__favorites">
      <h3 class="section__subtitle">Les musées favoris de {{$user->first_name}}</h3>

      <ul class="list-inline">
        @if($user->favoris->count() > 0)
          @foreach($user->favoris as $favori)
            <li class="place__item place__item--smallest">
              <a href="{{route("place.show", ["id" => $favori->id])}}" class="place__link" title="Afficher le lieu {{$favori->name}}"><span class="hide">Afficher le lieu {{$favori->name}}</span></a>
              <article class="place__article">
                <figure class="place__illustration place__illustration--small" style="background-image:url('{{URL::asset($favori->main_picture)}}');">
                  <figcaption class="hide">Photo du lieu {{$favori->name}}</figcaption>
                </figure>

                <div class="place__infos">
                  <h4 class="place__title title--place place__title--smallest">{{$favori->name}}</h4>
                  <div class="place__ratings place__ratings--small clearfix">
                    <ul class="ratings__stars list-inline column--left">
                      @for($i = 1; $i <= $favori->finalNote()["number"]; $i++)
                        <li class="star__item star--smallest">
                          <img class="star__img" src="{{URL::asset("img/icon--star.svg")}}" alt="Icone étoile de score">
                        </li>
                      @endfor

                      @if($favori->finalNote()["decimal"] >= 0.5)
                        <li class="star__item star--smallest">
                          <img class="star__img" src="{{URL::asset("img/icon--star--demi.svg")}}" alt="Icone étoile de score">
                        </li>
                      @endif

                    </ul>
                    <p class="ratings__text--smallest column--left">{{count($favori->completedRatings)}} avis</p>
                  </div>
                </div>
              </article>
            </li>
          @endforeach
        @else
          <li>Désolé, {{$user->first_name}} n'a pas encore ajouté de lieux favoris !</li>
        @endif
      </ul>
    </div>
  </div>
</section>

@endsection
