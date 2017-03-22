<?php

namespace App;

class Comment extends Model
{
    protected function post()
    {
        return $this->belongsTo(Post::class);
    }
}
