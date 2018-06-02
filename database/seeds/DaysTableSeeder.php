<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('days')->delete();

      DB::table('days')->insert(array(
        'id'=> 1,
        'name'=> "Lundi",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('days')->insert(array(
        'id'=> 2,
        'name'=> "Mardi",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('days')->insert(array(
        'id'=> 3,
        'name'=> "Mercredi",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('days')->insert(array(
        'id'=> 4,
        'name'=> "Jeudi",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('days')->insert(array(
        'id'=> 5,
        'name'=> "Vendredi",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('days')->insert(array(
        'id'=> 6,
        'name'=> "Samedi",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('days')->insert(array(
        'id'=> 7,
        'name'=> "Dimanche",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('days')->insert(array(
        'id'=> 8,
        'name'=> "Tous les jours",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));
    }
}
