@extends('app')

@section('content')

<h2>Sunbros</h2>
<br/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><a href="{{ url('/posts')}}" }}>Forums</a></h1>
        </div>
        <div class="panel-body">
            Forums, Posts and Comments or anything else our members feel like sharing
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><a href="{{ url('/posts')}}" }}>Blogs</a></h1>
        </div>
        <div class="panel-body">
            Member Blogs!
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><a href="{{ url('/posts')}}" }}>Members</a></h1>
        </div>
        <div class="panel-body">
            List of Members and some basic contact details
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><a href="{{ url('/posts')}}" }}>Code Snippets</a></h1>
        </div>
        <div class="panel-body">
            Bits and bobs of code that while not relevant to this forum still might be useful someday
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><a href="{{ url('/posts')}}" }}>Live Chat</a></h1>
        </div>
        <div class="panel-body">
            Pretty much what you think it would be
        </div>
    </div>

@endsection