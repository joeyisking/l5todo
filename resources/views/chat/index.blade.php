@extends('app')

@section('content')



    <div class="container">

        <div class="row">
            <div class="col-xs-3 col-md-3"></div>
            <div class="col-xs-6 col-md-6">
                <h3>Sunbros Live Chat</h3>
                <div class="panel panel-default">
                    <div class="panel-body" id="chat_window" style="height:300px">
                        <?php
                            foreach($chatmessages as $message){
                                echo $message->user_id . ": " . $message->message;
                            }
                        ?>
                    </div>
                </div>

                <form  role="search">
                    <textarea class="form-control" rows="2" placeholder="Text goes here"></textarea>
                    <br />
                    <div style="padding-top: 10px; float: right;">
                    <button type="button" class="btn btn-danger">Clear</button>

                    <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
            <div class="col-xs-3 col-md-3"></div>
        </div>
    </div>
@endsection