function showAllFriends(event) {
    $.ajax({
        url: "../../actions/circles/get_friends.php",
        type: "post",
        success: function (data) {
            var response = $.parseJSON(data);
            var modal = $("#usersModal .modal-body");
            var base_url = response['base_url'];

            var userContent = "";

            response['friends'].forEach(function (entry) {
                    userContent +=
                    '<div class="col-md-3 modal-friend">'+

                    '<img alt="10x10" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">'+

                    '<p>' +
                    '<a href=' + base_url + 'pages/users/profile.php?user=' + entry['hashid'] +
                    ' style="text-decoration: none; color: inherit; align: center;">'+ entry['name'] + '</a>' +
                    '</p>' +
                    '</div>';
                }
            );

            modal.html(userContent);

            $('#usersModal').modal({
                show: 'false'
            });

        },
        error: function () {}
    });
}


$("#btn-friendsList").click(showAllFriends);
