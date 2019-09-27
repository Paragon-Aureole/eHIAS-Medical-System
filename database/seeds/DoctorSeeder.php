<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
      $doctor = factory(App\Doctor::class, 10)->create();
      Schema::enableForeignKeyConstraints();

    }
}
