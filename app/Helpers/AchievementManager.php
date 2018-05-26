<?php
namespace App\Helpers;
use App\Achievement;
use App\Events\AchievementUpdated;
use DB, Auth;

class AchievementManager{

  public static function ManageAchievements($user, $type){
    $achievements = Achievement::where("type",$type)->orderBy("points",'asc')->get();
      foreach($achievements as $achievement){
        DB::table('achievement_user')->where(["user_id" => $user->id, "achievement_id" => $achievement->id, "unlocked" => 0])->increment('points');
      }

      $unlocked = event(new AchievementUpdated($user,$achievements));

      return $unlocked;
  }

}
