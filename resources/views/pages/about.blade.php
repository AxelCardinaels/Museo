@extends( "partials.front.app" )
@section( "header__class", "header--front" )

@section( "content")
</header>

<main>

  <section class="section">
    <div class="intro__container wrapper--texts" >
      <h3 class="section__title title--section">A propos de Museo</h3>
    </div>

    <div class="section__texts wrapper--texts">
      <p>De nos jours, les musées et les lieux d'expositions sont toujours perçus comme des endroits froids et distants, où l'on n'ose pas vraiment entrer. De plus, obtenir des renseignements, des évaluations ou des avis réels n'est pas toujours facile. Partant de ce constant, Museo est né. Développé dans le cadre d'un mémoire en Communication, orienté Médiation des Institutions Culturelles, cette plateforme a pour but d'offrir à tous un moyen plus simple de découvrir de nouveaux lieux d'expositions et de pouvoir en connaître la qualité grâce aux notes entrées par la communauté.</p>

      <p>La plateforme est à ce jour toujours en train d'être améliorée de façon régulière, afin de répondre de la façon la plus éfficiente aux attentes de chacun. N'hésitez d'ailleurs pas à entrer en contact avec <a href="http://www.axel-cardinaels.be" target="_blank" title="Site d'Axel Cardinaels">Axel Cardinaels</a> si quelque chose vous semble manquer ou pour toutes autres remarques constructives éventuelles.</p>

      <p>Le but final est donc de permettre de chacun de trouver ce qu'il cherche concernant les institutions qui l'intéresse, et ainsi pouvoir lui offrir la possibilité ou l'envie de sauter le pas pour finalement entreprendre de nouvelles visites et aventures culturelles. Evidemment, le tout fonctionne dans l'autre sens, avec une visibilité accrue pour les institutions également.</p>

      <p>Alors qu'attendez-vous pour créer un compte et tenter l'aventure Museo ? C'est totalement gratuit et l'inscription prend moins de 2 minutes !</p>


    </div>
  </section>

  <section class="section">
    <div class="intro__container intro__container--centered">
      <h3 class="section__title title--section">Notre super équipe</h3>
      <p class="section__subtitle">En vrai je suis seul, mais je trouvais cette section classe à ajouter</p>
    </div>

    <ul class="list--steps list-inline">
      <h4 class="hide">Les 3 étapes pour essayer Museo</h4>
      <li class="step__item">
        <img class="step__img" src="{{URL::asset("img/axel.png")}}" alt="Illustration trouvez un musée">
        <h5 class="step__title title--step title--step-large">Axel Cardinaels</h5>
        <p class="step__subtitle">Créateur, développeur, Génie du mal</p>
      </li>
    <ul>
  </section>

@endsection
