<?php

use Illuminate\Database\Seeder;

class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
        $prescription = factory(App\Prescription::class, 50)->create();
        Schema::enableForeignKeyConstraints();
    }
}
