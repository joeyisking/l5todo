@extends('app')

@section('content')
    <h2>Display all Post</h2>

    @foreach($posts as $post)
    <ul>{{ $post->title }}</ul>
    @endforeach

@endsection