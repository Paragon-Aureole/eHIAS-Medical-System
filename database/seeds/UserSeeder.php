<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
        $users = [
            [
                'employee_name' =>  'Administrator',
                'employee_position' => 'Administrator',
                'user_type' => '0',
                'username' => "admin1",
                'password' =>  Hash::make('admin1'),
            ],
            [
                'employee_name' => 'Tedd',
                'employee_position' => 'Clerk',
                'user_type' => '1',
                'username' => "ted1",
                'password' =>  Hash::make('tedtedted'),
            ],
            [
                'employee_name' => 'Marvin',
                'employee_position' => 'Doctor',
                'user_type' => '2',
                'username' => "marvin",
                'password' =>  Hash::make('marvinmarvin'),
            ],
            [
                'employee_name' => 'Jacob',
                'employee_position' => 'Doctor',
                'user_type' => '2',
                'username' => "inon",
                'password' =>  Hash::make('inoninon'),
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
        Schema::enableForeignKeyConstraints();
    }
}
