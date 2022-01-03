@extends("layouts.app")

@section("content")
<div class="container">
    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->name}}</a></h1>
    <hr>
    <button type="submit" class="btn btn-default"><a href="{{route('posts.index', $post->id)}}">Go Back</a></button> <br> <br>
    <div class="image-container">
        <img height="500" src="{{$post->path}}" alt="">
    </div>
</div>
@stop