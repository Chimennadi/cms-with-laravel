@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to My App</h1>
        <p>This is the laravel application</p>
        <p><a class="btn btn-primary btn-lg" href="{{route('login')}}" role="button">Login</a> <a class="btn btn-success btn-lg" href="{{route('register')}}" role="button">Register</a></p>
    </div>
@stop
