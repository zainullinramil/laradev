<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function store(Post $post){

        $this->validate(request(), ['body' => 'required|min:5']);

        $post->addComment(request('body'), auth()->id());

        return back();

    }
}
