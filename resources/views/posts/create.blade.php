@extends('app')
 
@section('content')
    <h2>Create a new Post</h2>

	{!! Form::model(new App\Post, ['route' => ['posts.store']]) !!}
        @include('posts/partials/_createPost', ['submit_text' => 'Create Post'])
    {!! Form::close() !!}
 
@endsection
