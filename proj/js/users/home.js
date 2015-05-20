/* Attach a submit handler to the form */
$("#registerForm").submit(function(event) {
    /* Stop form from submitting normally */
    event.preventDefault();

    /* Clear result div*/
    $("#registerForm #error_message").html('');

    /* Get some values from elements on the page: */
    var values = $(this).serialize();

    /* Send the data using post and put the results in a div */
    $.ajax({
        url: "../../actions/users/register.php",
        type: "post",
        data: values,
        success: function(data){
            //console.log(data);
            response = $.parseJSON(data);
            if (response.success == null){
                //response.filter(function (error) { return error.get(0)});
                $("#registerForm #error_message").html(response.errors[0]);
                $("#registerForm [name=password]").val('');
                $("#registerForm [name=confirmPassword]").val('');
            }
            else{
                $("#registerForm #error_message").html('Successfully registered! Please log in.');
                //window.location.replace('/home.php#sec1');
                $("html, body").delay(1100).animate({ scrollTop: $('#sec1').offset().top }, 1000);
            }
        },
        error:function(){
            $("#registerForm #error_message").html('There was an error while submiting the form');
        }
    });
});


$("#loginForm").submit(function(event) {
    /* Stop form from submitting normally */
    event.preventDefault();

    /* Clear result div*/
    $("#loginForm #error_message").html('');

    /* Get some values from elements on the page: */
    var values = $(this).serialize();

    /* Send the data using post and put the results in a div */
    $.ajax({
        url: "../../actions/users/login.php",
        type: "post",
        data: values,
        success: function(data){
            //console.log(data);
            response = $.parseJSON(data);
            if (response.success == null){
                //response.filter(function (error) { return error.get(0)});
                $("#loginForm #error_message").html(response.errors[0]);
                $("#loginForm [name=password]").val('');
            }
            else{
                window.location.replace('home.php');
                //location.reload();
            }
        },
        error:function(){
            $("#loginForm #error_message").html('There was an error while submiting the form');
        }
    });
});