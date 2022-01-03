@extends("layouts.app")

@section("content")
<div class="container">
    <h1>Create Post</h1>
    <form action="/posts" method="post" class="form-group" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="name" class="form-control" placeholder="Enter name">
        <hr>
        @csrf
        <div class="form-group">
            <input type="file" class="form-control-file" name="path" id="exampleInputFile">
        </div>
        <input type="submit" name="submit" value="CREATE" class="btn btn-primary">
    </form>
</div>
@stop