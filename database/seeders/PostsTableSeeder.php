<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = \Faker\Factory::create();
        for($i=1;$i<=15 ;$i++){

            Posts::create([
                'user_id'=>User::inRandomOrder()->first()->id,
                'title'=>$fake->sentence(4),
                'body'=>$fake->paragraph(),
            ]);
        }
    }
}
