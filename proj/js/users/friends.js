function showAllFriends(event) {

    console.log("Entrou aqui");

    $.ajax({
        url: "../../actions/circles/get_friends.php",
        type: "post",
        success: function (data) {
            var response = $.parseJSON(data);
            var modal = $("#usersModal .modal-body");
            var base_url = response['base_url'];

            var voteContent = "";
            response['friends'].forEach(function (entry) {
                    voteContent += '<p><a href=' + base_url + 'pages/users/profile.php?user='
                    + entry['hashid'] +
                    ' style="text-decoration: none; color: inherit">'+ entry['name'] + '</a></p>';
                }
            );

            modal.html(voteContent);

            $('#usersModal').modal({
                show: 'false'
            });

        },
        error: function () {}
    });
}


$("#btn-friendsList").click(showAllFriends);
