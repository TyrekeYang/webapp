<?php

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
        \App\Post::truncate();
        \App\Comment::truncate();
        factory(\App\Post::class, 10)->create();
        factory(\App\Comment::class, 10)->create();
    }
}
