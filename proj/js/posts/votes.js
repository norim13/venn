function showWhoVoted(event) {
    var post_id = $(this).attr('id').split('-')[2];

    $.ajax({
        url: "../../actions/post/get_votes.php",
        type: "post",
        data: {"post_id":post_id},
        success: function (data) {
            var response = $.parseJSON(data);

            if(response['success']!= null)
            if(response['can_view'] == 'true') {
                var modal = $("#voteModal .modal-body");

                var base_url = response['base_url'];

                var voteContent = "";
                response['votes'].forEach(function (entry) {
                        voteContent +=

                            '<div class="col-md-3" style="display:flex;justify-content:center;align-items:center;">'+
                                '<div>'+
                                    '<a href=' + base_url + 'pages/users/profile.php?user=' + entry['hashid'] +
                                    ' style="text-decoration: none; color: inherit; align: center;">'+
                                        '<img alt="profilePic" width="60" height="60" style="border-radius:50%" class="profilePic" src="../../images/users/' + entry['imagePath'] + '">'+
                                    '</a>' +
                                    '<p style="text-align: center;">' +
                                        '<a href=' + base_url + 'pages/users/profile.php?user=' + entry['hashid'] +
                                        ' style="text-decoration: none; color: inherit; align: center;">'+ entry['name'] + '</a>' +
                                    '</p>' +
                                '</div>'+
                            '</div>';

                    }
                );

                modal.html(voteContent);

                $('#voteModal').modal({
                    show: 'false'
                });
            }
            else window.alert(response['errors']);
        },
        error: function () {}
    });
}

$(".votedifference").click(showWhoVoted);
