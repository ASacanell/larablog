<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "alex",
            'email' => 'alex@gmail.com',
            'password' => bcrypt('alex'),
        ]);

        DB::table('posts')->insert([
            'title' => str_random(10),
            'content' => str_random(100)
        ]);

        DB::table('posts')->insert([
            'title' => str_random(10),
            'content' => str_random(100)
        ]);

        DB::table('posts')->insert([
            'title' => str_random(10),
            'content' => str_random(100)
        ]);

        DB::table('posts')->insert([
            'title' => str_random(10),
            'content' => str_random(100)
        ]);
    }
}
