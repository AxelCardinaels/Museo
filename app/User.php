<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function places(){
      return $this->hasMany('App\Place', 'creator_id', 'id');
    }

    public function claims(){
      return $this->hasMany('App\Claim');
    }


    public function favoris(){
      return $this->belongsToMany("App\Place", 'user_favorite_place', 'user_id', 'place_id')->withTimestamps();
    }

    public function startedAchievements(){
      return $this->belongsToMany("App\Achievement")->withPivot('points','unlocked')->withTimestamps();
    }

    public function unlockedAchievements(){
      return $this->belongsToMany("App\Achievement")->wherePivot("unlocked",1)->withPivot('points','unlocked')->withTimestamps();
    }

    public function hasStartedAchievement($id) {
      if($this->startedAchievements->contains($id)){
        return true;
      }else{
        return false;
      }
    }

    public function ratings(){
      return $this->hasMany('App\Rating')->orderBy("created_at","desc");
    }

    public function completedRatings(){
      return $this->hasMany('App\Rating')->where("completed",1)->orderBy("created_at","desc");
    }

    public function isPlaceFavorited($id) {
      if($this->favoris->contains($id)){
        return true;
      }else{
        return false;
      }
    }

    public function fullName(){
      return $this->first_name . ' ' . $this->last_name;
    }

    public function likes(){
      return $this->hasMany('App\Like');
    }


    public function dislikes(){
      return $this->hasMany('App\Dislike');
    }
    public function title(){
      return $this->hasOne("App\Achievement","id","achievement_id")->where("id",$this->achievement_id);
    }
}
