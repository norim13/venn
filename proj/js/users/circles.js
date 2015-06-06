function createNewCircle(event) {
    var id_array = [];

    $("li.active").each( function( index, element ){
        id_array.push($( this ).attr("id").split('-')[1]);
    });

    var name = $('#circle_name_content').val();

    $.ajax({
        url: '../../actions/circles/create_new_circle.php',
        type: 'post',
        data: {"friends":id_array,"circle_name":name},
        success: function(data){
            $('#btn-newCircle').click();
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

    console.log("Entrou aqui");

    $.ajax({
        url: "../../actions/circles/get_circles.php",
        type: "post",
        success: function (data) {

            console.log("SUCESSAO");

            var response = $.parseJSON(data);
            var modal = $("#circlesModal .modal-body");
            var base_url = response['base_url'];

            var userContent = "";

            response['circles'].forEach(function (entry) {
                    userContent +=
                        '<div class="col-md-3 modal-friend">'+
                        '<img alt="10x10" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">'+

                        '<p>' +
                        entry['name'] +
                        '</p>' +
                        '</div>';
                }
            );

            modal.html(userContent);

            $('#circlesModal').modal({
                show: 'false'
            });

        },
        error: function () {}
    });
}


$("#addToCircleButton").click(addFriendToCircle);