@extends('app')

@section('content')
    <h2>Display all Post</h2>

    @foreach($posts as $post)
        <ul><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></ul>
    @endforeach

@endsection