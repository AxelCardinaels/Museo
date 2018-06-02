<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CriteriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('criterias')->delete();

      DB::table('criterias')->insert(array(
        'id'=> 1,
        'title'=> "Communication",
        'description' => "L'institution transmettait-elle d'une façon agréable et cohérente les informations qu'elle voulait vous partager ? Au temps durant l'exposition que pour des informations plus générales ?",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));

      DB::table('criterias')->insert(array(
        'id'=> 2,
        'title'=> "Accessibilité",
        'description' => "Les lieux étaient-ils adaptés pour que chacun puisse se mouvoir facilement ? L'accès y était-il simple ?",
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ));
    }
}
