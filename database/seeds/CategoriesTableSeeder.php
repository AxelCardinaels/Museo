<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(array(
          'id'=> 1,
          'title'=> "Architecture & Maisons-Musées",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('categories')->insert(array(
          'id'=> 2,
          'title'=> "Art",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('categories')->insert(array(
          'id'=> 3,
          'title'=> "Histoire et Archéologie",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('categories')->insert(array(
          'id'=> 4,
          'title'=> "Littérature",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('categories')->insert(array(
          'id'=> 5,
          'title'=> "Sciences, Nature & Technique",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('categories')->insert(array(
          'id'=> 6,
          'title'=> "Spécialités",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));

        DB::table('categories')->insert(array(
          'id'=> 7,
          'title'=> "Société",
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ));
    }
}
