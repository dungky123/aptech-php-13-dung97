<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\users;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $Faker = Faker::create();
        users::create([
            'title'=> $Faker->sentence($nbWords = 6, $variableNbWords = true),
            'slug'=> $Faker->slug,
            'description'=> $Faker->text($maxNbChas = 200),
            'content'=> $Faker->randomHtml(2, 3),
            'img_path'=> $Faker->imageUrl($width = 800, $height = 400, 'cats')
        ]);
    }
}
