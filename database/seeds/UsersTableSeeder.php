<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $users = [];
     //    $faker = Facker\Factory::create();
     //    for($i =0; $i<=30; $i++){
     //        $users[] = App\User::create([
     //        'name' => $faker->name,
     //        'email' => $faker->email,
     //        'password' => $faker->mt_rand(10)->password
     //    ]);
    
    $users = [
    [
        'name' => 'first user',
        'email' => 'firstuser@email.com',
        'password'=> '12345678'
    ],
    [
        'name' => 'second user',
        'email' => 'seconduser@email.com',
        'password'=> '12345678'
    ]
];
    }

    // $this->assertTrue(count($users) <= 30);
        }
    

