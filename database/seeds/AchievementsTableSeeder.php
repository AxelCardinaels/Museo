<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('achievements')->delete();


        DB::table('achievements')->insert(array(
          'id'=> 1,
          'title'=> "Contributeur en herbe",
          'description'=>'Bravo, vous avez publié votre premier musée !',
          'points'=>'1',
          'icon'=>'img/achievements/ac__createplace--bronze.svg',
          'type'=>'PlaceCreated',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 2,
          'title'=> "Contributeur confirmé",
          'description'=>'Félicitations, vous confirmez votre statut de contributeur avec vos 5 musées publiés !',
          'points'=>'5',
          'icon'=>'img/achievements/ac__createplace--silver.svg',
          'type'=>'PlaceCreated',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 3,
          'title'=> "Contributeur de génie",
          'description'=>'On ne vous arrête plus ! Vous avez bien mérité votre titre de contributeur de génie avec vos 15 musées publiés ! Merci ! ',
          'points'=>'15',
          'icon'=>'img/achievements/ac__createplace--gold.svg',
          'type'=>'PlaceCreated',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 4,
          'title'=> "Elève modèle",
          'description'=>'Vous avez complété votre profil à 100% !',
          'points'=>'1',
          'icon'=>'img/achievements/ac__filldatas--gold.svg',
          'type'=>'ProfilCompleted',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 5,
          'title'=> "Early Bird",
          'description'=>'Vous avez rejoint Museo dès la beta !',
          'points'=>'1',
          'icon'=>'img/achievements/ac__earlybird.svg',
          'type'=>'EarlyBird',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 6,
          'title'=> "Critique amateur",
          'description'=>'Bravo, vous avez publié votre premier avis sur un lieu !',
          'points'=>'1',
          'icon'=>'img/achievements/ac__createrating--bronze.svg',
          'type'=>'RatingCreated',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 7,
          'title'=> "Critique confirmé",
          'description'=>'Vous devenez un de nos meilleurs rédacteurs ! Merci pour ces 10 contributions !',
          'points'=>'10',
          'icon'=>'img/achievements/ac__createrating--silver.svg',
          'type'=>'RatingCreated',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 8,
          'title'=> "Maître des avis",
          'description'=>'La rédaction d’un avis n’a plus de secret pour vous, joyeux 25ème !',
          'points'=>'25',
          'icon'=>'img/achievements/ac__createrating--gold.svg',
          'type'=>'RatingCreated',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('achievements')->insert(array(
          'id'=> 9,
          'title'=> "Rockstar des avis",
          'description'=>'Vous ne vous arretez jamais ? 50 avis, c’est du jamais vu !',
          'points'=>'50',
          'icon'=>'img/achievements/ac__createrating--diamond.svg',
          'type'=>'RatingCreated',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));
    }
}
