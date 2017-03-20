@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

    <h1>Publish a Post</h1>
        <hr>

        <form method="POST" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Publish</button>
        </form>

    </div>
@endsection