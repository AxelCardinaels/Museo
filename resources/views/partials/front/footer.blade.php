</main>

<footer class="clearfix footer--front @yield("footer__class")">
  <h3 class="hide">Pied de page</h2>

    <nav class="column--left">
      <ul class="footer__list--front footer__list list-inline">
        <li class="footer__item--front footer__item">
          <a class="footer__link--front footer__link" href="{{route("home")}}" alt="Retourner à l'accueil">Accueil</a>
        </li>
        <li class="footer__item--front footer__item">
          <a class="footer__link--front footer__link" href="" alt="En savoir plus sur Museo">A propos</a>
        </li>

        @if(!Auth::check())
          <li class="footer__item--front footer__item">
            <a class="footer__link--front footer__link" href="{{route("auth.connexion")}}" alt="Se connecter sur Besace">Connexion</a>
          </li>
          <li class="footer__item--front footer__item">
            <a class="footer__link--front footer__link" href="{{route("auth.inscription")}}" alt="S'inscrire sur Besace">Inscription</a>
          </li>
        @endif
      </ul>
    </nav>
    <div class="column--right">
      <p class="">Museo {{date("Y")}} - Développé par <a class="footer__disclaimer" target="_blank" alt="Afficher le site web d'Axel Cardinaels" href="http://www.axel-cardinaels.be">Axel Cardinaels</a></p>
    </div>
  </div>
</footer>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd2Q4qMy26JC9g2qziOsNzYoFujuKjTLA&callback=initMap" async defer></script>