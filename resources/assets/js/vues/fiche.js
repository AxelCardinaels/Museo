if( $('.vue--fiche').length ){
  var fiche = new Vue({
      el: '.vue--fiche',

      data:{
        picked : '',
        newRating : {
          title : '',
          avis : '',
          place_id : '',
          user_id : '',
        },

        baseUrl : $(".baseurl").text(),
        loadedRatings : [],
        comments : [],
        createdRating : null,
        errors : null,
      },

			mounted : function(){

			},

      methods:{

        starsManagement : function(selector){
          var etoiles = $(selector);
          etoiles.hover(function(){

            etoile = $(etoiles[etoiles.index(this)]);
            etoile.addClass("etoile--hovered");
            if(etoile.hasClass("etoile--selected")){
              etoile.nextAll().addClass("etoile--unselected");
            }
            etoile.prevAll().addClass("etoile--hovered");
          },function(){
            etoile = $(etoiles[etoiles.index(this)]);
            etoile.removeClass("etoile--hovered");
            $(etoiles).removeClass("etoile--unselected");
            etoile.prevAll().removeClass("etoile--hovered");
          } );

          etoiles.click(function(){
            etoile = $(etoiles[etoiles.index(this)]);
            $(etoiles).removeClass("etoile--selected");
            etoile.addClass("etoile--selected");
            etoile.prevAll().addClass("etoile--selected");
          });
        },


        createRating : function(place_id, user_id){
          var modal = $('[data-remodal-id=modal-evaluation]').remodal();
          var nextModal = $('[data-remodal-id=modal-criteria-0]').remodal();
          this.newRating.place_id = place_id;
          if(user_id == null){
            this.newRating.user_id = null;
          }else{
            this.newRating.user_id = user_id;
          }

          var that = this;
					var response = axios.post(that.baseUrl+"/api/rating/create", this.newRating)
          .then(function(response){
            if(response.data.errors){
              that.errors = response.data.errors;
            }else{
              that.createdRating = response.data;
              that.picked = '';
              that.errors = null;
              modal.close();
              nextModal.open();
              that.starsManagement('[data-remodal-id=modal-criteria-0] .star--label')
            }
					});
        },

        addCriteria : function (criteria_id, modal_index, final){
          var modal = $('[data-remodal-id=modal-criteria-'+modal_index+']').remodal();
          this.starsManagement('[data-remodal-id=modal-criteria-'+(modal_index+1)+'] .star--label');
          var nextModal = null;
          var that = this;
          if(final){
            nextModal = $('[data-remodal-id=modal-criteria-final]').remodal();
            var criteria = {note : that.picked, criteria_id : criteria_id, rating_id : that.createdRating.id, completed : 1};
          }else{
            nextModal = $('[data-remodal-id=modal-criteria-'+(modal_index+1)+']').remodal();
            var criteria = {note : that.picked, criteria_id : criteria_id, rating_id : that.createdRating.id};
          }

          var response = axios.post(that.baseUrl+"/api/rating/criteria/create", criteria)
          .then(function(response){
            if(response.data.errors){
              that.errors = response.data.errors;
            }else{
              modal.close();
              nextModal.open();
              that.picked = '';
              that.errors = null;
            }
					});
        },

        createLike : function(element_id,user_id, type, event){
          var newLike = {
            id : element_id,
            type_name : type,
          };

          if(user_id == null){
            newLike.user = null;
          }else{
            newLike.user = user_id;
          };

          var cible = $(event.target);
          cible.toggleClass("icon--like icon--liked");

            var response = axios.post(that.baseUrl+"/api/like/create", newLike)
            .then(function(response){
              var parent = $(cible[0]).parent().parent();
              $(parent[0]).find(".likes__total").text(response.data[0]);

              if(response.data[1]){
                parent = $(parent).parent();
                var toUpdate = $(parent).find(".icon--disliked");
                $(toUpdate[0]).toggleClass("icon--disliked icon--dislike");
              }
            });
        },

        createDislike : function(element_id,user_id, type, event){
          var newDislike = {
            id : element_id,
            type_name : type,
          };

          if(user_id == null){
            newDislike.user = null;
          }else{
            newDislike.user = user_id;
          };

          var cible = $(event.target);
          cible.toggleClass("icon--dislike icon--disliked");
            var response = axios.post(that.baseUrl+"/api/dislike/create", newDislike)
            .then(function(response){
              var parent = $(cible[0]).parent().parent();
              $(parent[0]).find(".likes__total").text(response.data[0]);

              if(response.data[1]){
                parent = $(parent).parent();
                var toUpdate = $(parent).find(".icon--liked");
                $(toUpdate[0]).toggleClass("icon--liked icon--like");
              }
            });

        },

        createComment : function(element_id, user_id, type, event){

          var input = $(event.target).find(".input--answer")[0];
          var newComment = {
            id : element_id,
            user : user_id,
            type_name : type,
            comment: input.value,
          }
          var that = this;
          var response = axios.post(that.baseUrl+"/api/comment/create", newComment)
          .then(function(response){
            that.getOneComment(response.data.id, user_id);
            input.value = '';
          });
        },

        getComments : function(element, user, event){
          var cible = $(event.target).parent().parent();
          var boutons = $(cible).find(".comment__show-answers");
          var list = $(cible).find(".comment__answers");
          list.toggleClass("hide");
          boutons.toggleClass("hide");
          var that = this;
          if(!this.loadedRatings[element]){
            var response = axios.get(that.baseUrl+"/api/comments/"+element+"/"+user)
            .then(function(response){
              for(var i = 0; i < response.data.length; i++ ){
                that.comments.push(response.data[i]);
              }
              that.loadedRatings[element] = true;
            });
          };

        },

        hideComments : function(event){
          var cible = $(event.target).parent().parent();
          var list = $(cible).find(".comment__answers");
          var boutons = $(cible).find(".comment__show-answers");
          list.toggleClass("hide");
          boutons.toggleClass("hide");
        },

        getOneComment(id, user){
          var that = this;
          var response = axios.get(that.baseUrl+"/api/comment/"+id+"/"+user)
          .then(function(response){
              that.comments.push(response.data);
          });
        },
      },


  });
};
