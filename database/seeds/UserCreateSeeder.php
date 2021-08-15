<?php

use App\User;
use Illuminate\Database\Seeder;

class UserCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([

            'name' => 'karam',
            'email' => 'karam@gmail.com',
            'password' => bcrypt('123123123'),
 
        ]);
    }
}
