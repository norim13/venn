/**
 * Created by João on 06/06/2015.
 */


$(document).ready(function() {
    charactersRemainingNewPost();
});


function charactersRemainingNewPost(){
    var text_max = 600;
    $('#counter-remaining-chars').html(text_max + ' characters remaining');

    $('#new-post-textarea').keyup(function() {
        var text_length = $('#new-post-textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#counter-remaining-chars').html(text_remaining + ' characters remaining');
    });
}