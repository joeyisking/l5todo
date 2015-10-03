@extends('app')

@section('content')
    <h3>Blogs</h3>

    <div class="panel panel-default">
        <div class="panel-body">
            <?php
            foreach($blogs as $blog){

                echo $blog->title . "<br />";
            }
            ?>
        </div>

    </div>

    <div>
        <button />
    </div>
@endsection