@extends( "partials.front.app" )
@section( "menu__class", "menu--inside")
@section( "content")
</header>

<main>
  <section class="section wrapper--small wrapper--centered">
    <div class="form__header clearfix">
      <h2 class="title--section column--left">Ajouter un musée</h2>

      <a class="column--right" title="Publier le musée"><label for="submit-form" class="bouton bouton--small" tabindex="0">Publier le musée</label></a>
    </div>
    @include("places.forms.add")
  </section>


@endsection
