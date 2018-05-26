<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(CountriesTableSeeder::class);
      $this->call(AchievementsTableSeeder::class);
      $this->call(CategoriesTableSeeder::class);
    }
}
