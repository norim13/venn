$("#botao_novo_circulo").click(function(event) {
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
        },
        error: function(){}
    });
});

function acceptFriendRequest(event) {
    event.preventDefault();

    var user_id = $( this ).attr("id").split('-')[1];

    $.ajax({
        url: '../../actions/circles/accept_friend_request.php',
        type: 'post',
        data: {"user_id" :  user_id},
        success: function(data){
        },
        error: function(){}
    });
}

$('.accept_friend_request').click(acceptFriendRequest);

function declineFriendRequest(event) {
    event.preventDefault();
    var user_id = $( this ).attr("id").split('-')[1];

    $.ajax({
        url: '../../actions/circles/decline_friend_request.php',
        type: 'post',
        data: {"user_id" :  user_id},
        success: function(data){
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
