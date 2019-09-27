<?php

use Illuminate\Database\Seeder;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
      $drugs = factory(App\Drug::class, 50)->create();
      Schema::enableForeignKeyConstraints();
    }
}
