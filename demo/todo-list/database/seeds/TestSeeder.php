<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(App\todo::class, 100)->create();
    factory(App\user::class, 20)->create();
  }
}
