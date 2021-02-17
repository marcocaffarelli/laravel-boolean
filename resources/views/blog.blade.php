@extends('layouts.app')
@section('posts')
    <h1>Posts</h1>
    <div>
        @foreach ($posts as $post) 
            <h3>{{$post->title}}</h3>
            <p>{{$post->body}}</p>
        @endforeach
    </div>
@endsection