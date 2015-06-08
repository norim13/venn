function createNewCircle(event) {
    var id_array = [];

    $(".select-friends-new-circle li.active").each( function( index, element ){
        id_array.push($( this ).attr("id").split('-')[1]);
    });

    if(id_array.length == 0)
        return;

    var name = $('#circle_name_content').val();

    if(name == null || name == "")
        return;

    $.ajax({
        url: '../../actions/circles/create_new_circle.php',
        type: 'post',
        data: {"friends":id_array,"circle_name":name},
        success: function(data){
            //console.log(data);
            var response = $.parseJSON(data);
            if (response.success != null){
                $('#btn-newCircle').click();
            }
            //else console.log(response.errors[0]);

        },
        error: function(){}
    });
}

$("#botao_novo_circulo").click(createNewCircle);

function acceptFriendRequest(event) {
    var user_id = $( this ).attr("id").split('-')[1];

    $.ajax({
        url: '../../actions/circles/accept_friend_request.php',
        type: 'post',
        data: {"user_id" :  user_id},
        success: function(data){
            var response = $.parseJSON(data);
            $('#friendship-request-panel-' + response).animate({
                    "opacity" : "0"},
                700,
                function () {
                    $('#friendship-request-panel-' + response).remove();
                });
        },
        error: function(){}
    });
}

$('.accept_friend_request').click(acceptFriendRequest);

function declineFriendRequest(event) {
    var user_id = $( this ).attr("id").split('-')[1];

    $.ajax({
        url: '../../actions/circles/decline_friend_request.php',
        type: 'post',
        data: {"user_id" :  user_id},
        success: function(data){
            var response = $.parseJSON(data);
            $('#friendship-request-panel-' + response).animate({
                    "opacity" : "0"},
                700,
                function () {
                    $('#friendship-request-panel-' + response).remove();
                });
        },
        error: function(){}
    });
}

$('.decline_friend_request').click(declineFriendRequest);

function createFriendRequest(event) {
    var user_id = $( this ).attr("id").split('-')[2];

    $.ajax({
        url: '../../actions/circles/create_new_friend_request.php',
        type: 'post',
        data: {"user_id" :  user_id},
        success: function(data){
            $('#new_friend_request-btn-'+user_id).removeClass('new_friend_request-btn');
            $('#new_friend_request-btn-'+user_id).html('Friend Request Sent');
        },
        error: function(){}
    });
}

$('.new_friend_request-btn').click(createFriendRequest);

function removeFriendship(event) {
    var user_id = $( this ).attr("id").split('-')[3];

    $.ajax({
        url: '../../actions/circles/removeFriendship.php',
        type: 'post',
        data: {"user_id" :  user_id},
        success: function(data){
        },
        error: function(){}
    });
}

$('.remove-friendship-btn').click(removeFriendship);

function addFriendToCircle(event) {
    $.ajax({
        url: "../../actions/circles/get_circles.php",
        type: "post",
        success: function (data) {
            var response = $.parseJSON(data);
            var modal = $("#circlesModal .modal-body");
            var base_url = response['base_url'];

            var userContent = '<ul class="listrap">';

            response['circles'].forEach(function (entry) {
                    userContent +=
                        '<div class="col-md-3 modal-circle" style="display:flex;justify-content:center;align-items:center;">'+
                        '<li>' +
                        '<div class="listrap-toggle">' +
                        '<img alt="profilePic" width="80" height="80" class="profile-circles img-circle img-responsive"  src="../../images/users/' + entry['imagePath'] + '">'+
                        '<p>' +
                        entry['name'] +
                        '</p>' +
                        '</div>'+
                        '</li>'+
                       '</div>';
                }
            );

            userContent += '</ul>';

            modal.html(userContent);

            $('#circlesModal').modal({
                show: 'false'
            });

        },
        error: function () {}
    });
}

$("#addToCircleButton").click(addFriendToCircle);