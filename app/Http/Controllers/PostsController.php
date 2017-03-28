<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

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
        //Валидация полейr
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(new Post(request(['title', 'body'])));
        //Создание нвоого поста

//        Post::create([
//            'title' => request('title'),
//            'body' => request('body'),
//            'user_id' => auth()->id()
//
//        ]);


        //редирект на главную
        return redirect('/');
    }
}
