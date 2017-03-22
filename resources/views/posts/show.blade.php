@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        </h2>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
        {{$post->body}}
    </div>
@endsection