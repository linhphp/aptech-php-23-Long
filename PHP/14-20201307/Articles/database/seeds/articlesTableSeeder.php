<?php

use Illuminate\Database\Seeder;
use App\Article;
use Illuminate\Support\Str;
class articlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
       for($i=0;$i<10;$i++){
           $title = $faker->sentence(rand(5,8),true);
           $slug = Str::slug($title,'-');
           $description = $faker->text(rand(80,150),true);
           $content = $faker->text(rand(300,1000),true);
           Article::create([
               'title'=> $title,
               'slug' => $slug,
               'description'=> $description,
               'content' => $content
           ]);
       }
    }
}
