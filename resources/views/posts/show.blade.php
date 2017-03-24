@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        </h2>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
        {{$post->body}}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>{{$comment->created_at->diffForHumans()}}: &nbsp; </strong>
                        <br>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>

        {{--add a comment--}}

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    {{ csrf_field() }}

                    {{--                    {{method_field('PATCH')}}--}}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>

                @include('layouts.errors')

            </div>
        </div>
    </div>
@endsection