<?php

namespace App;

class Comment extends Model
{
    protected function post()
    {
        return $this->belongsTo(Post::class);
    }

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment(Comment $comment){

        $this->comments()->save($comment);

    }
}
