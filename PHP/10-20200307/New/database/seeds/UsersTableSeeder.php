<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   for($i=0;$i <5;$i++){
        $faker = Faker\Factory::create();
        $name=$faker->name;
        $email=$faker->email;
       /* DB::table('users')->insert([
            'name'=>$faker->name,
            'email'=>$faker->unique()->email,
            'password'=>bcrypt('123456789'),
        ]);*/
        User::create([
            "name"=>$name,
            "email"=>$email,
            "password"=>bcrypt('123456')
        ]);
    }
       
    }
}
