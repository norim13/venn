function comment(event) {
    var parentdiv = $(this).parent();
    var post_id = parentdiv.attr('id').split('-')[1];
    var msg = parentdiv.children()[0].value;

    $.ajax({
        url: "../../actions/post/comment.php",
        type: "post",
        data: {"post_id":post_id, "msg":msg},
        success: function(data){
            parentdiv.children()[0].value = '';

            var response = $.parseJSON(data);
            var newmsg = response['comment']['msg'];
            var msgowner = response['comment']['user'];
            var hashowner = response['comment']['user_hashid'];
            var date = response['comment']['date'];

            var linkToProfile = '<a href="{$BASE_URL}pages/users/profile.php?user=' + hashowner +
                ' style="text-decoration: none; color: inherit">'+ msgowner +'</a>';

            $('<div class="panel panel-default">' +
            '<div class="panel-heading">' + newmsg + '</div>' +
            '<div class="panel-body">' + linkToProfile + ', on ' + date +
            '</div></div>').insertBefore(parentdiv);
        },
        error: function(){}
    });
}

$(".btn-comment").click(comment);

function togglecomments(event) {
    var post_id = $(this).attr('id').split('-')[2];
    var button = $(this);

    if($(this).hasClass('expanded')) {
        $(this).removeClass('expanded');
        $("#comments-" + post_id + " .comment-panel").remove();
    } else {
        $.ajax({
            url: "../../actions/post/getComment.php",
            type: "post",
            data: {"post_id":post_id},
            success: function(data){
                button.addClass('expanded');

                var response = $.parseJSON(data);

                var parentdiv = $('#commentform-'+ post_id);

                var comments = response['comments'];
                comments.forEach(function(entry) {

                    var newmsg = entry['message'];
                    var date = entry['date'];

                    var msgowner = entry['name'];
                    var hashowner = entry['hashid'];

                    var linkToProfile = '<a href=' + base_url + 'pages/users/profile.php?user=' + hashowner +
                        ' style="text-decoration: none; color: inherit">'+ msgowner +'</a>';

                    $('<div class="panel panel-default comment-panel">' +
                    '<div class="panel-heading">' + newmsg + '</div>' +
                    '<div class="panel-body">' + linkToProfile + ', on ' + date +
                    '</div></div>').insertBefore(parentdiv);
                });
            },
            error: function(){}
        });
    }
}

$(".btn-comments").click(togglecomments);
