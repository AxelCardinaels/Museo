
    <nav class="compte__menu">
      <ul class="compte__menu-list">
        <li class="compte__menu-item">
          @if(Route::currentRouteName() == "compte.edit" )
            <a class="compte__menu-link compte__menu-link--current" href="{{route("compte.edit")}}" title="Modifier les informations de base de mon compte">Informations de base</a>
          @else
            <a class="compte__menu-link" href="{{route("compte.edit")}}" title="Modifier les informations de base de mon compte">Informations de base</a>
          @endif
        </li>

        <!--<li class="compte__menu-item">
          <a class="compte__menu-link" href="">Mot de passe</a>
        </li>-->

        <li class="compte__menu-item">
          @if(Request::segment(3) == "supprimer" || Route::currentRouteName() == "compte.remove" )
            <a class="compte__menu-link compte__menu-link--current" href="{{route("compte.remove")}}" title="Afficher la page de suppression de mon compte">Suppression</a>
          @else
            <a class="compte__menu-link" href="{{route("compte.remove")}}" title="Afficher la page de suppression de mon compte">Suppression</a>
          @endif
        </li>
      </ul>
    </nav>
