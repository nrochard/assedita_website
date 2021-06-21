<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++){
            DB::table('posts')->insert([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'short_description' => $faker->sentence($nbWords = 16, $variableNbWords = true) ,
                'content' => $faker->text,
                'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'path_img' => "",
                'isActive' => $faker->numberBetween($min = 0, $max = 1)
            ]);
        }
    }
}