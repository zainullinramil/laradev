<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){

        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id){

        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    protected function store()
    {
        //Валидация полей
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);


        //Создание нвоого поста

        Post::create(request(['title', 'body']));

        //редирект на главную21
        return redirect('/');
    }
}
