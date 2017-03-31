<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->delete();
        for ($i = 0; $i < 10; $i++){
        Post::create([
            'title' => 'Post '.$i,
            'body' => 'Contents of the post '.$i,
            'user_id' => 1,
        ]);

        }

    }
}
