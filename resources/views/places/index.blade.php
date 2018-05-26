@extends( "partials.front.app" )
@section( "header__class", "header--home header--front" )

@section( "content")


<main>

  <div class="header__content header__content--home background--home">
    <span class="header__black"></span>
    <div class="inside__content">
      <div>
        <h2 class="header__title title--header">Découvrez de nouveaux musées, <span class="title__lign">autrement.</span></h2>
        <form class="header__search" action="#" method="GET">
          <input type="text" class="header__input" name="search" id="search" placeholder="Pourquoi pas « Liège » ?"/>
          <input type="submit" class="header__submit bouton bouton--search" value="Rechercher"/>
        </form>
      </div>
    </div>
  </div>
</header>

@endsection
