function vote(event) {
    var vote = $(this).attr('id').split('-');
    var positive = vote[0];
    var post_id = vote[1];

    $.ajax({
        url: "../../actions/post/vote.php",
        type: "post",
        data: {"bool":positive, "id":post_id},
        success: function (data) {
            var response = $.parseJSON(data);
            if(response.new_votecount < 0)
                $("#td-votedifference-" + response.post_id).html("<i class=\"fa fa-minus-square-o\" style=\"color:rgb(176, 49, 33)\"></i>");
            else $("#td-votedifference-" + response.post_id).html("<i class=\"fa\">"+response.new_votecount +"</i>");

            var colorG = "rgb(92,184,92)";
            var colorR = "rgb(176, 49, 33)";
            if(response.changed == 0) { // add new vote
                if(response.bool == "downvote")
                    $("#" + response.bool + "-" + response.post_id).css("color",colorR);
                else $("#" + response.bool + "-" + response.post_id).css("color",colorG);
            }
            else if(response.changed == 1) { //delete vote
                $("#" + response.bool + "-" + response.post_id).css("color","");
            }
            else if(response.changed == 2) { //change downvote to upvote
                $("#" + response.bool + "-" + response.post_id).css("color",colorG);
                $("#downvote-" + response.post_id).css("color","");
            }
            else if(response.changed == 3) { //change upvote to downvote
                $("#" + response.bool + "-" + response.post_id).css("color",colorR);
                $("#upvote-" + response.post_id).css("color","");
            }
        },
        error: function () {}
    });
};

$(".upvote-btn").click(vote);
$(".downvote-btn").click(vote);

function deletePost(event) {
    var post_id = $(this).attr('id').split('-')[2];

    $.ajax({
        url: "../../actions/post/delete_post.php",
        type: "post",
        data: {"post_id":post_id},
        success: function (data) {
            var response = $.parseJSON(data);

            $("#panel-feed-" + response.post_id).animate({
                    "opacity" : "0"},
                700,
                function () {
                    $("#panel-feed-" + response.post_id).remove();
                });
        },
        error: function () {}
    });
}

$(".btn-delete").click(deletePost);

$('.datepicker').datepicker({
    format: "dd/mm/yyyy"
});

function repost(event) {
    var post_id = $(this).attr('id').split('-')[2];

    $.ajax({
        url: "../../actions/post/repost.php",
        type: "post",
        data: {"post_id":post_id},
        success: function (data) {
            $('#btn-repost-'+post_id).attr('data-toggle','tooltip');
            $('#btn-repost-'+post_id).attr('data-placement','bottom');
            $('#btn-repost-'+post_id).attr('title','Repost successful');

            $('[data-toggle="tooltip"]').tooltip();
        },
        error: function () {}
    });
}

$(".btn-repost").click(repost);



function fillModal(event) {
    var post_id = $(this).attr('id').split('-')[2];

    console.log("Entrou aqui");

    $.ajax({
        url: "../../actions/post/getPostData.php",
        type: "post",
        data: {"post_id":post_id},
        success: function (data) {

           try {
                var response = $.parseJSON(data);

                if (response.success != null){
                    $('#edit-post-textarea').val(response.post.message);
                    $('#edit-post-url').val(response.post.url);
                    $('#datePickerEdit1').val(response.startdate);
                    $('#datePickerEdit2').val(response.enddate);

                    $('#datePickerEdit1').val(response['startdate']);
                    $('#datePickerEdit2').val(response['enddate']);

                    var tags_text = "";

                    response['tags'].forEach(function (entry) {
                        tags_text += entry['name'] +  ',' ;

                    });

                    $('#edit-post-tags').val(tags_text);



                    console.log(tags_text);

                }else{
                    console.log(data);
                }
            }
            catch(err) {
                console.log(data);
            }


        },
        error: function () {}
    });
}

$(".btn-edit").click(fillModal);

