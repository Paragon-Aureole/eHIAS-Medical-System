<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        // // $this->call(DoctorSeeder::class);
        // // $this->call(DrugSeeder::class);
        // $this->call(PatientSeeder::class);
        // $this->call(MedicalRecordsSeeder::class);
        // $this->call(ReferralsSeeder::class);
        // $this->call(SicknessSeeder::class);
        // $this->call(PrescriptionsSeeder::class);
    }
}
