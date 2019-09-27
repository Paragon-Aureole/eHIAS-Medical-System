<?php

use Illuminate\Database\Seeder;

class MedicalRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
        $medicalrecord = factory(App\MedicalRecord::class, 50)->create();
        Schema::enableForeignKeyConstraints();
    }
}
