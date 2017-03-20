<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function show(){
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    protected function store()
    {
        //Создание нвоого поста

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
    }
}
