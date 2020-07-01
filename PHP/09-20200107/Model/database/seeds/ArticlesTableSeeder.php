<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=0;$i <10; $i++){
            DB::table('articles')->insert([
                'name'=>'long',
                'email'=>'long@gmail.com',
                'password'=>123456
            ]
    
            );
        }
       
    }
}
