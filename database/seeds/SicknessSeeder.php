<?php

use Illuminate\Database\Seeder;

class SicknessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
        $sickness = factory(App\Sickness::class, 50)->create();
        Schema::enableForeignKeyConstraints();
    }
}
