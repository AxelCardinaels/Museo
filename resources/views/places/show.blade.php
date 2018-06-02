@extends( "partials.front.app" )
@section( "header__class", "header--fiche" )
@section("menu__class", "menu--inside")
@section("body__class", "vue--fiche")
@section( "content")

<div class="fiche__splash wrapper--large wrapper--centered" style="background-image:url('{{URL::asset($place->main_picture)}}');">
  <div class="splash__boutons">
    <a class="bouton bouton--header" href="#" title="Afficher les photos du musées">
      <span class="map__text"><span class="hide--responsive">Afficher les</span> photos</span>
    </a>

    @if(Auth::check())

      @if(Auth::User()->isPlaceFavorited($place->id))
      <form  class="form--button form--favorite" method="POST" action="{{route("favorite.delete", ["id" => $place->id])}}">
        {{ csrf_field() }}
        <button type="submit" class="bouton bouton--header">
          <img class="map__icon icon--heart" src="{{URL::asset("img/icon--heart--red.svg")}}" alt="Icone favoris"/>
          <span class="map__text hide--responsive">Retirer des favoris</span>
        </button>
      </form>
      @else
        <form  class="form--button form--favorite" method="POST" action="{{route("favorite.create", ["id" => $place->id])}}">
          {{ csrf_field() }}
          <button type="submit" class="bouton bouton--header">
            <img class="map__icon icon--heart" src="{{URL::asset("img/icon--heart.svg")}}" alt="Icone favoris"/>
            <span class="map__text hide--responsive">Ajouter aux favoris</span>
          </button>
        </form>
      @endif
    @else
        <button type="submit" class="bouton bouton--header form--button form--favorite" data-remodal-target="modal-join">
          <img class="map__icon icon--heart" src="{{URL::asset("img/icon--heart.svg")}}" alt="Icone favoris"/>
          <span class="map__text hide--responsive">Ajouter aux favoris</span>
        </button>
    @endif

  </div>
</div>
</header>

<main>

<section class="wrapper--fiche wrapper--centered fiche__recap clearfix">
  <div class="column--left fiche__infos">
    <div class="fiche__title">
      <div>
        <h2 class="section__title title--section">{{$place->name}}</h2>
        <span class="place__category">{{$place->category->title}}</span>
      </div>
      <p class="fiche__subtitle">Un lieu ajouté par <a href="{{route("user.show", ['id' => $place->user->id])}}" class="link--simple" title="Afficher le profil de {{$place->user->fullName()}}">{{$place->user->fullName()}}</a></p>
    </div>

    <div class="fiche__stars">
      <div class="clearfix">
        <ul class="ratings__stars list-inline column--left">
          @for($i = 1; $i <= $place->finalNote()["number"]; $i++)
            <li class="star__item star--larger">
              <img class="star__img" src="{{URL::asset("img/icon--star.svg")}}" alt="Icone étoile de score">
            </li>
          @endfor

          @if($place->finalNote()["decimal"] >= 0.5)
            <li class="star__item star--larger">
              <img class="star__img" src="{{URL::asset("img/icon--star--demi.svg")}}" alt="Icone étoile de score">
            </li>
          @endif

        </ul>
        <p class="ratings__text column--left">{{count($place->ratings)}} avis</p>
      </div>

      @foreach($firstFive as $five)
        @if($five == $place->id && $place->note != 0)
          <p class="fiche__perk">Classé N°{{$loop->index + 1}} dans le top 5 du site!</p>
        @endif
      @endforeach
    </div>

    <div class="fiche__description">
      <h3 class="hide">Description du musée</h3>
      @if($place->description)
        {!! nl2br(e($place->description)) !!}
      @else
        <p>Ce lieu n'a pas encore de description</p>
      @endif
    </div>

    <div class="fiche__links">
      <h3 class="hide">Informations pratiques sur le musée</h3>
      <p class="fiche__localisation fiche__datas">
        <img class="icon--localisation datas__icon" src="{{URL::asset("img/icon--marker--black.svg")}}" alt="Icone localisation"/>
        <a href="#" class="localisation__link link--icon" title="Afficher l'adresse sur la carte">{{$place->adress}}</a>
      </p>

      @if($place->website)
        <p class="fiche__website fiche__datas">
          <img class="icon--website datas__icon" src="{{URL::asset("img/icon--web.svg")}}" alt="Icone site web"/>
          <a href="{{$place->website}}" target="_blank" class="localisation__link link--icon" title="Afficher le site web">{{$place->website}}</a>
        </p>
      @endif

      @if($place->freeDay_id)
        <p class="fiche__website fiche__datas">
          <img class="icon--money datas__icon" src="{{URL::asset("img/icon--money.svg")}}" alt="Icone prix"/>
          <span class="link--icon">
            @if($place->freeDay_id == 8)
              Gratuit tous les jours
            @else
              Gratuit le premier {{$place->freeDay->name}} du mois
            @endif

            </span>
        </p>
      @endif
    </div>

    <div class="fiche__commentaires">
      <h3 class="section__subtitle subtitle--spaced">Avis et commentaires des utilisateurs</h3>

      <a href="#" class="bouton bouton--small bouton--comments" @if(Auth::check()) data-remodal-target="modal-evaluation" @else data-remodal-target="modal-join" @endif title="Ajouter une évaluation"><span class="hide--responsive">Vous l’avez visité ? </span>Ajoutez une évaluation!</a>

      <ul class="comments__list list--comments list-inline">
        @foreach($place->showableRatings as $rating)
          <li class="comment__item comment__item--full">
            <article class="comment__article clearfix">
              <figure class="column--left comment__face" style="background-image:url('{{URL::asset($rating->user->avatar)}}');">
                <figcaption class="hide">Photo de l'utilisateur {{$rating->user->fullName()}}</figcaption>
              </figure>

              @if($rating->user->achievement_id)<img class="comment__icon" src="{{URL::asset($rating->user->title->icon)}}" alt="Icone du titre {{$rating->user->title->title}}"> @endif

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

                <p class="comment__by">Par <a href="{{route("user.show", ["id" => $rating->user->id])}}" class="link--simple" title="Afficher le profil de {{$rating->user->fullName()}}">{{$rating->user->fullName()}}</a> {{ $rating->created_at->diffForHumans() }}</p>

                <div class="comment__text">
                  <div class="comment__comment">
                    <p>{!! nl2br(e($rating->avis)) !!}</p>
                  </div>

                  <div class="comment__actions">

                      <div class="comment__action">
                        @if(Auth::check())
                          <a href="#" @click.prevent="createLike({{$rating->id}},{{Auth::id()}},'rating', $event)" class="comment__action--like" title="Aimer ce commentaire">
                        @else
                          <a href="#" data-remodal-target="modal-join" class="comment__action--like" title="Aimer ce commentaire">
                        @endif
                            @if(Auth::check() && $rating->didUserLiked(Auth::User()->id))
                              <figure class="action__icon icon--liked"><figcaption class="hide">Commentaire déja aimé. Ne plus aimer ?</figure>
                            @else
                              <figure class="action__icon icon--like"><figcaption class="hide">Icone aimer ce commentaire</figure>
                            @endif
                          </a>
                        <span class="likes__total">{{count($rating->likes)}}</span> <span class="hide">{{count($rating->likes)}} fois utile</span>
                      </div>
                        @if(Auth::check())
                          <a href="#" @click.prevent="createDislike({{$rating->id}},{{Auth::id()}},'rating', $event)" class="comment__action comment__action--dislike" title="Ne plus désapprouver ce commentaire">
                        @else
                          <a href="#" data-remodal-target="modal-join" class="comment__action comment__action--dislike" title="Ne plus désapprouver ce commentaire">
                        @endif
                        @if(Auth::check() && $rating->didUserDisliked(Auth::User()->id))
                          <figure class="action__icon icon--disliked"><figcaption class="hide">Commentaire déja non-aimé. Ne plus voté contre ?</figure>
                        @else
                          <figure class="action__icon icon--dislike"><figcaption class="hide">Icone ne pas aimer ce commentaire</figure>
                        @endif
                        <span class="hide">Hors sujet</span>
                      </a>
                      @if(Auth::check())
                        <a href="#" class="comment__action" title="Répondre ce commentaire" @click.prevent="getComments({{$rating->id}}, {{Auth::id()}}, $event)">
                      @else
                        <a href="#" class="comment__action" title="Répondre ce commentaire" data-remodal-target="modal-join">
                      @endif
                      Répondre
                    </a>
                  </div>

                  @if(!$rating->comments->isEmpty())

                  @if(Auth::check())
                  <a href="#" class="comment__show-answers" title="Afficher les réponses" @click.prevent="getComments({{$rating->id}}, {{Auth::id()}}, $event)">
                  @else
                    <a href="#" class="comment__show-answers" title="Afficher les réponses" @click.prevent="getComments({{$rating->id}}, null, $event)">
                  @endif
                    <img class="action__icon" src="{{URL::asset("img/icon--arrow--black.svg")}}" alt="Icone afficher les commentaires"/>
                    @if(count($rating->comments) == 1)
                      Afficher la réponse
                    @else
                      Afficher les {{count($rating->comments)}} réponses
                    @endif
                  </a>

                  <a href="#" class="comment__show-answers hide" title="Masquer les réponses" @click.prevent="hideComments($event)">
                    <img class="action__icon" src="{{URL::asset("img/icon--arrow--up--black.svg")}}" alt="Icone masquer les commentaires"/>
                    Cacher les {{count($rating->comments)}} réponses
                  </a>
                @endif

                  <ul class="comment__answers list--answers list-inline hide">

                    <li class="comment__item comment__item--small" v-for="comment in comments" v-if="comment.element_id == {{$rating->id}}">
                      <article class="comment__article clearfix">
                        <figure class="column--left comment__face comment__face--small" :style="{ backgroundImage: 'url({{URL::to("/")}}/' + comment.user.avatar + ')' }">
                          <figcaption class="hide">Photo de l'utilisateur @{{comment.user.first_name}} @{{comment.user.last_name}}</figcaption>
                        </figure>

                        <div class="column--right comment__texts comment__texts--small">
                          <p class="answer__by"><a :href="'/membre/' + comment.user.id" class="link--simple" title="Afficher le profil de">@{{comment.user.first_name}} @{{comment.user.last_name}}</a> @{{comment.humanDate}}</p>

                          <div class="comment__text">
                            <div class="comment__comment">
                              <p v-html="comment.comment"></p>
                            </div>

                            <div class="comment__actions">

                                <div class="comment__action">
                                  @if(Auth::check())
                                    <a href="#" class="comment__action--like" title="Aimer ce commentaire" @click.prevent="createLike(comment.id,{{Auth::id()}},'comment', $event)">
                                  @else
                                    <a href="#" class="comment__action--like" title="Aimer ce commentaire" data-remodal-target="modal-join">
                                  @endif

                                        <figure class="action__icon icon--liked" v-if="comment.liked"><figcaption class="hide">Commentaire déja aimé. Ne plus aimer ?</figure>
                                        <figure class="action__icon icon--like" v-if="!comment.liked"><figcaption class="hide">Icone aimer ce commentaire</figure>
                                    </a>
                                  <span class="likes__total">@{{comment.likes.length}}</span> <span class="hide">@{{comment.likes.length}} fois utile</span>
                                </div>

                                @if(Auth::check())
                                  <a href="#"  class="comment__action comment__action--dislike" title="Ne plus désapprouver ce commentaire" @click.prevent="createDislike(comment.id,{{Auth::id()}},'comment', $event)">
                                @else
                                  <a href="#"  class="comment__action comment__action--dislike" title="Ne plus désapprouver ce commentaire" data-remodal-target="modal-join">
                                @endif
                                    <figure class="action__icon icon--disliked" v-if="comment.disliked"><figcaption class="hide">Commentaire déja non-aimé. Ne plus voté contre ?</figure>
                                    <figure class="action__icon icon--dislike" v-if="!comment.disliked"><figcaption class="hide">Icone ne pas aimer ce commentaire</figure>
                                  <span class="hide">Hors sujet</span>
                                </a>
                            </div>
                          </div>
                        </div>
                      </article>
                    </li>

                    @if(Auth::check())
                      <li class="answer__item clearix">
                        <form class="answer__form column--right" method="POST" @submit.prevent="createComment({{$rating->id}},{{Auth::id()}},'rating', $event)">
                          <textarea type="text" class="input--answer" name="answer" id="answer" placeholder="Répondez à {{$rating->user->first_name}}"></textarea>
                          <input type="submit" class="bouton--small bouton" value="Publier" />
                        </form>
                      </li>
                    @endif
                  </ul>
                </div>
              </div>
            </article>
          </li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="column--right fiche__stats">


    <h3 class="section__subtitle subtitle--section">Evaluation générale du musée</h3>
    <p>Les notes affichées ci-dessous sont basées sur les retours que les membres de la communauté ont laissé après avoir visité l’institution.</p>

    <ul class="stats__criteria clearfix">
      @if($detailledNotes)
      @foreach($detailledNotes as $note)
        <li class="criteria__item">
          <h4 class="title--criteria">{{$note["infos"]->title}}</h4>
          <ul class="ratings__stars list-inline">

            @for($i = 1; $i <= $note["number"]; $i++)
              <li class="star__item star--large">
                <img class="star__img" src="{{URL::asset("img/icon--star.svg")}}" alt="Icone étoile de score">
              </li>
            @endfor

            @if($note["decimal"] >= 0.5)
              <li class="star__item star--large">
                <img class="star__img" src="{{URL::asset("img/icon--star--demi.svg")}}" alt="Icone étoile de score">
              </li>
            @endif
          </ul>
        </li>
      @endforeach
      @else
        <li class="no-datas">Désolé, ce musée n'a pas encore été évalué !</li>
      @endif

    </ul>

    <div class="fiche__perks">
      <h3 class="section__subtitle">Tags du musée</h3>
      <ul class="list--perks list-inline">
        @if($place->tags->isEmpty())
          <li class="no-datas">Désolé, ce musée n'a pas encore de tags !</li>
        @else
          @foreach($place->tags as $tag)
            <li class="perk__item">
              <a href="#" class="perk__link bouton--empty" title="Afficher les musées possédant le tag {{$tag->title}}">{{$tag->title}}</a>
            </li>
          @endforeach
        @endif
      </ul>
    </div>
  </div>
</section>

@if(Auth::check())
  <div data-remodal-id="modal-evaluation" class="remodal">
    <div class="modal__inside modal--unpadded wrapper--modal wrapper--modal--large wrapper--centered">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div class="modal__box">
        <h3 class="title--modal">Racontez-nous votre expérience !</h3>
        <p class="subtitle--success">Concernant le lieu "{{$place->name}}"</p>
        <img class="modal__illustration modal__illustration--large" src="{{URL::asset("img/ratingillu.png")}}" alt="Image d'illustration du processus d'évaluation"/>
        <div class="evaluation__content">
          <transition name="fade">
            <div class="errors__container" v-if="errors != null">
              <h3 class="title--error">Il y a eu un soucis lors de la validation !</h3>
                <ul class="list--errors">
                    <li v-for="error in errors" class="error__item">@{{error[0]}}</li>
                </ul>
            </div>
          </transition>

          <h4 class="section__subtitle subtitle--evaluation">Parlez-nous de votre visite</h4>

          <form class="evaluation__form" method="POST"  v-on:submit.prevent="createRating({{$place->id}}, {{Auth::id()}})">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset class="modal__fieldset">
              <input type="text" class="input--text input--classic input--full" v-model="newRating.title" name="title" id="title" value="{{old('title')}}" placeholder="En deux mots, votre avis ?"/>
              <textarea class="input--text input--classic input--full input--textarea" v-model="newRating.avis" name="avis" id="avis" value="{{old('avis')}}" placeholder="Ici, vous pouvez décrire votre expérience plus en détails si vous le souhaitez !"></textarea>
              <input type="submit" name="submit-form" id="submit-form" class="hide" tabIndex="-1"/>
            </fieldset>
          </form>
        </div>
      </div>
      <button class="button__modal--fake" title="Fermer la fenêtre"><label for="submit-form" class="button__label modal__close" tabindex="0">Passer à l'évaluation</label></button>
    </div>
  </div>

  @foreach($criterias as $criteria)
    <div data-remodal-id="modal-criteria-{{$loop->index}}" class="remodal modal" data-remodal-options="closeOnOutsideClick: false">
      <div class="modal__inside modal--unpadded wrapper--modal wrapper--modal--large wrapper--centered">
        <div class="modal__box">
          <h3 class="title--modal">Racontez-nous votre expérience !</h3>
          <p class="subtitle--success">Concernant le lieu "{{$place->name}}"</p>

          <div class="evaluation__content">
            <transition name="fade">
              <div class="errors__container" v-if="errors != null">
                <h3 class="title--error">Il y a eu un soucis lors de la validation !</h3>
                  <ul class="list--errors">
                      <li v-for="error in errors" class="error__item">@{{error[0]}}</li>
                  </ul>
              </div>
            </transition>
            <h4 class="section__subtitle subtitle--evaluation">{{$criteria->title}} (critère {{$loop->index + 1}}/{{count($criterias)}})</h4>
            <p class="modal__description">{{$criteria->description}}</p>

            <div class="criteria__container">
              <h4 class="title--criteria">{{$criteria->title}}</h4>
              @if($loop->last)
                <form class="criteria__form" method="POST"  v-on:submit.prevent="addCriteria({{$criteria->id}},{{$loop->index}},'final-modal')">
              @else
                <form class="criteria__form" method="POST"  v-on:submit.prevent="addCriteria({{$criteria->id}},{{$loop->index}})">
              @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset class="modal__fieldset">
                  <label class="star--label" for="rate-1"><input type="radio" name="rate-1" id="rate-1" class="radio--star hide" v-model="picked" value="1"/></label>
                  <label class="star--label" for="rate-2"><input type="radio" name="rate-2" id="rate-2" class="radio--star hide" v-model="picked" value="2"/></label>
                  <label class="star--label" for="rate-3"><input type="radio" name="rate-3" id="rate-3" class="radio--star hide" v-model="picked" value="3"/></label>
                  <label class="star--label" for="rate-4"><input type="radio" name="rate-4" id="rate-4" class="radio--star hide" v-model="picked" value="4"/></label>
                  <label class="star--label" for="rate-5"><input type="radio" name="rate-5" id="rate-5" class="radio--star hide" v-model="picked" value="5"/></label>
                  <input type="submit" name="submit-form-{{$loop->index}}" id="submit-form-{{$loop->index}}" class="hide" tabIndex="-1"/>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        <button class="button__modal--fake" title="Passer au critère suivant"><label for="submit-form-{{$loop->index}}" class="button__label modal__close" tabindex="0">Critère suivant</label></button>
      </div>
    </div>
  @endforeach

  <div data-remodal-id="modal-criteria-final" class="remodal" data-remodal-options="closeOnEscape: false, closeOnOutsideClick: false">
    <div class="modal__inside modal--unpadded wrapper--modal wrapper--modal--large wrapper--centered">
      <div class="modal__box">
        <h3 class="title--modal">Merci d'avoir partagé votre expérience !</h3>
        <p class="subtitle--success">Concernant le lieu "{{$place->name}}"</p>
        <img class="modal__illustration modal__illustration--large" src="{{URL::asset("img/connexion.png")}}" alt="Image d'illustration du processus d'évaluation"/>
        <p class="modal__text success__text">Votre avis et vos notes ont été ajoutés sur la fiche, merci !</p>
      </div>
      <a href="{{route("place.back", ["id" => $place->id])}}" class="modal__close" title="Fermer la fenêtre">Retour à la fiche du lieux</a>
    </div>
  </div>
@endif

<div data-remodal-id="modal-join" class="remodal">
  <div class="modal__inside modal--unpadded wrapper--modal wrapper--modal--large wrapper--centered">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="modal__box">
      <h3 class="title--modal">Rejoignez Museo pour vivre une expérience sur mesure !</h3>
      <img class="modal__illustration modal__illustration--large" src="{{URL::asset("img/connexion.png")}}" alt="Image d'illustration du processus d'évaluation"/>
      <p class="modal__text success__text">En créant un compte, vous pourrez commenter, aimer, partager du contenu ainsi que personnaliser votre profil ! Et bien plus encore !</p>
    </div>
    <a href="{{route("auth.inscription")}}" class="modal__close" title="Fermer la fenêtre">Créer un compte</a>
  </div>
</div>

@endsection
