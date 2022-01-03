@extends("layouts.app")

@section("content")
<div class="container">
    <h1>Edit Post</h1>
    <form action="/posts/{{$post->id}}" method="post" class="form-group">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$post->name}}">
        <hr>
        {{csrf_field()}}
        <input type="submit" name="submit" value="EDIT" class="btn btn-primary">
    </form>
    <form action="/posts/{{$post->id}}" method="post" class="form-group">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="submit" value="DELETE" class="btn btn-danger">
    </form>
</div>
@stop