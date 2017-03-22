<?php

namespace App;

class Post extends Model
{

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){

//        $this->comments()->create(compact('body'));

        Comment::create([
            'body' => $body,
            'user_id' => 1,
            'post_id' => $this->id,
        ]);

    }
}
