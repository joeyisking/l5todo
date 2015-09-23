@extends('app')

@section('content')
    <h3>Forums</h3>


    <table class="table">
        <thead>
        <tr>
            <th>Votes</th>
            <th>Title</th>
            <th>Authored By</th>
        </tr>
        </thead>
        <tbody>
    @foreach($posts as $post)
        <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"/>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            {{ $post->votes }}
                        </td>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"/>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <h4><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h4>
            </td>
            <td>
                {{$post->user_id}}
                Username and date will go here
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>

@endsection