$( document ).ready(function() {
    chat_submit();
    clear_button();
    scroll_down();
});

function chat_submit(){

    $("#chat_submit").click( function() {
        var scroll = $("#chat_window");
        var height = scroll[0].scrollHeight;

        $.ajax({
            type: "POST",
            url: "chat/store",
            data: {
                '_token': $('input[name=_token]').val(),
                'message': $("#message_field").val()
            },
            success: function (data) {
                var result = JSON.parse(data);

                if (result != false){
                    $("#message_field").val('');
                    display = "<b>" + result['name'] + ": </b>" + result['message'] + "<br />";
                    $("#chat_window").append(display);
                    scroll.scrollTop(height);
                }
            }
        });
    });
}

function clear_button(){
    $("#clear_field").click( function() {
        $("#message_field").val('');
    });
}

function scroll_down(){
    var scroll = $("#chat_window");
    var height = scroll[0].scrollHeight;

    scroll.scrollTop(height);
};