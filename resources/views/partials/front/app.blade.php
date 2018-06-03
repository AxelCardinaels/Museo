<!DOCTYPE html>
<html lang="fr">
    @include( "partials.head" )

    <body>
      <div class="hide baseurl">{{ url('/') }}</div>
      <div class="@yield("body__class")">
      @if (session('status'))
        <div class="alert__container alert--success">
          {{ session('status') }}
        </div>
      @endif

      @if (session('Fail'))
        <div class="alert__container alert--fail">
          {{ session('Fail') }}
        </div>
      @endif

      @if(session('succes'))
        <div data-remodal-id="succes-unlocked" class="remodal modal-should-open">
          <div class="modal__inside modal--unpadded wrapper--modal wrapper--modal--small wrapper--centered">
            <button data-remodal-action="close" class="remodal-close"></button>
            <div class="modal__box">
              <h2 class="title--modal">Nouveau titre déverrouillé !</h2>
              <p class="subtitle--success">{!! session('succes__title') !!}</p>
              <img class="modal__illustration modal__illustration--large" src="{{URL::asset("img/successillu.png")}}" alt="Image d'illustration succès dévérouillé"/>
              <p class="modal__text success__text">{!! session('succes') !!}</p>
            </div>
            <button class="modal__close" data-remodal-action="close" title="Fermer la fenêtre">Super, merci !</button>
          </div>
        </div>
      @endif

      @include("partials.front.menu")
        @yield( "content" )
        @include( "partials.front.footer" )
      </div>
    </body>


</html>
