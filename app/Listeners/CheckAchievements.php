<?php

namespace App\Listeners;

use App\Events\AchievementUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
use App\Achievement;

class CheckAchievements
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $response = null;
        foreach($event->achievements as $achievement){
          $successes = DB::table('achievement_user')->where(["user_id" => $event->user->id, "achievement_id" => $achievement->id, "unlocked" => 0])->get();
          foreach($successes as $success){
            if($success->points == $achievement->points){
                DB::table('achievement_user')->where(["user_id" => $event->user->id, "achievement_id" => $achievement->id])->update(["unlocked" => 1]);

                $response = ["text" => 'Félicitations, vous avez débloqué le titre " '.$achievement->title.' " ! <a href="'.route("compte.edit").'" title="Afficher mes titres" class="modal__link">Afficher mes titres</a> ', 'title' => $achievement->title];
            }
          }
        }
        return $response;
    }
}
