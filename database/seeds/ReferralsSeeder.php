<?php

use Illuminate\Database\Seeder;

class ReferralsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
        $refer = factory(App\Referral::class, 50)->create();
        Schema::enableForeignKeyConstraints();
    }
}
