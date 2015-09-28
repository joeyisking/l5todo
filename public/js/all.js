$( document ).ready(function() {
    chat_submit();

});

function chat_submit(){
    console.log('calling function');
    $("#chat_submit").click( function() {
        $.ajax({
            type: "POST",
            url: "chat/store",
            data: {
                '_token': $('input[name=_token]').val(),
                'message': $("#message_field").val()
            },
            success: function (data) {
                var result = JSON.parse(data);
                console.log($result);
                //$()chat_window $("#message_field").val()

            }
        });
    });
}