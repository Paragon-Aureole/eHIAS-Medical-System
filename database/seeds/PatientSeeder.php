<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
        $patient = factory(App\Patient::class, 50)->create();
        Schema::enableForeignKeyConstraints();
    }
}
