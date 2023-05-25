<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;
use Faker\Generator as Faker;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        for ($i = 0; $i < 10; $i++) {

            $newPost = new Project();
            $newPost->title = $faker->sentence(4);
            $newPost->category = $faker->text(20);
            $newPost->content = $faker->text(500);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();

        }
    }
}