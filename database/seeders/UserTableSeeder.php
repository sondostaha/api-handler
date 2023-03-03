<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'sondostaha',
            'email'=>'sondos123@yahoo.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'walaa',
            'email'=>'walaa123@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'tasneem',
            'email'=>'tota33@yahoo.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
