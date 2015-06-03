function showWhoVoted(event) {
    var post_id = $(this).attr('id').split('-')[2];

    $.ajax({
        url: "../../actions/post/get_votes.php",
        type: "post",
        data: {"post_id":post_id},
        success: function (data) {
            var response = $.parseJSON(data);

            if(response['can_view'] == 'true') {
                var modal = $("#voteModal .modal-body");

                var voteContent = "";
                response['votes'].forEach(function (entry) {
                        voteContent += "<p>" + entry['name'] + "</p>";
                    }
                );

                modal.html(voteContent);

                $('#voteModal').modal({
                    show: 'false'
                });
            }
        },
        error: function () {}
    });
}

$(".votedifference").click(showWhoVoted);