<header class="home__header front--header @yield("header__class")">
  <div class="menu__container menu__container--front @yield("menu__class") clearfix">
    <h1 class="title--logo column--left">
      <a href="{{route("home")}}" class="logo__link" title="Retourner à la page d'accueil">
        <span class="hide">Museo</span>
        <img src="{{URL::asset("img/logo.svg")}}" class="logo__img" alt="Logo de Museo"/>
      </a>
    </h1>
    <nav class="column--right">
      <ul class="menu__list--front menu__list list-inline">
        <li class="menu__item--front menu__item">
          <a class="menu__link--front menu__link" title="Rechercher des lieux" href="{{route("place.search")}}">Rechercher</a>
        </li>

        <li class="menu__item--front menu__item">
          <a class="menu__link--front menu__link" title="A propos de Museo" href="{{route("about")}}">A propos</a>
        </li>
        @if(!Auth::check())
        <li class="menu__item--front menu__item">
          <a class="menu__link--front menu__link" title="Se connecter" href="{{route("auth.connexion")}}">Connexion</a>
        </li>
        <li class="menu__item--front menu__item">
          <a class="menu__link--front menu__link" title="Créer un compte" href="{{route("auth.inscription")}}">Inscription</a>
        </li>
      @endif

      @if(Auth::check())



      <li class="menu__item--user">
        <a href="#" class="menu__img" title="Afficher le menu utilisateur">
          <img class="menu__illustration" src="{{URL::asset(Auth::User()->avatar)}}" alt="Votre photo de profil">
        </a>

        <ul class="user__menu hide">

          <li class="user__item--front user__item">
            <a class="user__link--front user__link" title="Ajouter un nouveau lieu" href="{{route("place.add")}}">Ajouter un lieu</a>
          </li>
          <li class="user__item--front user__item">
            <a class="user__link--front user__link" title="Afficher mon page utilisateur" href="{{route("user.show", ["id" => Auth::User()->id])}}">Mon profil</a>
          </li>

          <li class="user__item--front user__item">
            <a class="user__link--front user__link" title="Modifier mes informations" href="{{route("compte.edit")}}">Réglages</a>
          </li>
        <li class="user__item--front user__item">
          <a class="user__link--front user__link" title="Se déconnecter" href="{{route("auth.logout")}}">Déconnexion</a>
        </li>
        </ul>
      </li>
    @endif
      </ul>
    </nav>
  </div>
