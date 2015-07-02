@extends('app')

@section('content')
    <h2>Display all Post</h2>

    @foreach($posts as $post)
        <ul><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></ul>
    @endforeach


    <?php
    $array = array('hello1','hello2','hello3', 'hello4','hello5','hello3', 'hello4','hello5');
    ?>
    <div class="container-fluid">
    <?php $i = 0;?>
    @foreach($array as $value)
            @if($i == 5)
                <div class="row">
            @endif
                <div class="col-md-2 ">
                    <div class="panel panel-default" style="padding: 10px 10px 10px 10px;">
                        <div class="row">
                            <div class = "col-md-12">
                                <div class="panel panel-default">
                                    <br />
                                    image
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                        <?php echo $value;?><br />
                        address<br />
                        like<br />

                    </div>
                </div>
            @if($i == 5)
                </div>
                <?php $i = 0;?>
            @endif
        <?php $i = $i + 1;?>
    @endforeach
    </div>


@endsection