  <div class="form__content">
    @if (count($errors) > 0)
      <div class="errors__container">
        <h3 class="title--error">Il y a eu un soucis lors de la validation !</h3>
          <ul class="list--errors">
              @foreach ($errors->all() as $error)
              <li class="error__item">{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      <form  role="form" method="POST" action="{{route("place.create")}}" class="clearfix vue--create-place" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="simulated-input input--upload-banner bg--faked input--full uploaded-picture__container">
          <div class="input__add">
            <img class="add__icon" src="{{URL::asset("img/icon--add.svg")}}" alt="Icone ajouter une image"/>
            <p class="add__text">Ajoutez une photo principale pour ce musée</p>
          </div>
          <input type="file" class="input--upload-img upload-img--museum reactive-upload" name="main_picture" id="main_picture" accept="image/*"/>
        </div>

        <fieldset class="column--left column--basics">
          <h3 class="section__subtitle subtitle--spaced-small">Parlez-nous de l’établissement</h3>
          <input type="text" class="input--text input--classic input--full" name="name" id="name" value="{{old('name')}}" placeholder="Quel est le nom du musée ?" required/>
          <textarea class="input--text input--classic input--full input--textarea" name="description" id="description" placeholder="Décrivez-nous donc le musée !" value="{{old('description')}}"></textarea>
        </fieldset>

        <fieldset class="column--right column--more form__part">
          <h3 class="section__subtitle subtitle--spaced-small">Informations supplémentaires</h3>
          <input type="url" class="input--text input--classic input--full" name="website" id="website" value="{{old('website')}}" placeholder="Quel est le site web du musée ?"/>
          <input type="text" class="input--text input--classic input--full" v-model.lazy="adress" v-debounce="500" @change="searchPlace()" value="" placeholder="Quelle est l'adresse complète (rue, ville, pays) du musée ?" required/>
          <div class="adress__selector" v-if="showAdresses == 1">
            <label class="label--classic label--full">Sélectionnez l'adresse</label>
            <select v-if="adresses.status == 'ZERO_RESULTS'"  class="input--classic input--full">
              <option disabled selected>Désolé, il n'y a pas de résultats</option>
            </select>
            <select @change="updateLocalisation()" v-if="adresses.status == 'OK'" class="input--classic input--full select--adress">
              <option disabled selected>Sélectionnez une adresse</option>
              <option v-for="adress in adresses.results" :value="adress.place_id" @click="test()">@{{adress.formatted_address}}</option>
            </select>

            <input type="hidden" class="adresse--hidden" name="adress" id="adress" value=""/>
            <input type="hidden" class="geo--hidden" name="geo" id="geo" value=""/>
            <input type="hidden" class="state--hidden" name="state" id="state" value=""/>
            <input type="hidden" class="adresse--city" name="city" id="city" value=""/>
            <input type="hidden" class="country--hidden" name="country" id="country" value=""/>
            <input type="hidden" class="adresse--number" name="number" id="number" value=""/>
          </div>
        </fieldset>

        <fieldset class="column--right column--more form__part">
          <h3 class="section__subtitle subtitle--spaced-small">Ajoutez les caractéristiques du musée</h3>
          <select class="input--text input--classic input--full" name="free" id="free" required>
            <option selected disabled>Ce musée est il parfois gratuit ?</option>
            <option value="0" {{ (old('free') == 0) ? "selected" : "" }}>Ce musée n'est jamais gratuit</option>
            @foreach($days as $day)
                <option value="{{$day->id}}" {{ (old('free') == $day->id) ? "selected" : "" }}>
                  @if($day->id == 8)
                    Ce musée est toujours gratuit
                  @else
                    Le premier {{$day->name}} du mois
                  @endif
              </option>
            @endforeach
          </select>

          <select class="input--text input--classic input--full" name="category" id="category" required>
            <option value="" selected disabled>La catégorie du musée</option>
            @foreach($categories as $category)
              <option value="{{$category->id}}" {{ (old('category') == $category->id) ? "selected" : "" }}>{{$category->title}}</option>
            @endforeach
          </select>

          <div class="tags__container">
            <input type="text" class="tag__input" v-model="tags" @keyup.comma="addTag()" @keyup.enter="addTag()" name="tag" id="tag" placeholder="Tags (art, art contemporain, ...) séparés par des virgules"/>
            <ul class="list--perks list-inline">
              <li class="perk__item bouton--empty tag--small" v-for="(tag, itemObjKey) in savedTags">
                @{{tag}} <button class="tag__delete" @click.prevent="deleteTag(itemObjKey)">x</button>
              </li>
            </ul>

            <input type="hidden" name="allTags" value="{{old('allTags')}}" class="tags--all" id="alltags"/>
          </div>
        </fieldset>

        <a title="Publier le musée"><label for="submit-form" class="bouton bouton--large submit--museum" tabindex="0">Publier le musée</label></a>

         <input type="submit" id="submit-form" class="hide" />
      </form>
  </div>
