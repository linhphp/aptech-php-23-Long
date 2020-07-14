<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        for($i=0;$i<5;$i++){
            DB::table('long')->insert([
                'product'=>Str::random(15),
                'produce'=>Str::random(20),
                'price'=>random_int(1000,5000),
    
            ]);     
        }
        
    }
}
