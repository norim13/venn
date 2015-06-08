/**
 * Created by João on 07/06/2015.
 */

$( document ).ready(function() {
    $("#select-circles-feed .right-circle-checkbox").click(function(){

        var selected_circle_ids  = [];

        $('#select-circles-feed .right-circle-checkbox:checked').each(function () {
            selected_circle_ids.push( $(this).val() );
        });

        if(selected_circle_ids.length != 0){
            loading_icon = "<div class=\"form-group\"><div class=\"col-md-12 text-center\"><span class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate\"></span></div></div>"
            $(".right-panel-posts").html(loading_icon);

            $.ajax({
                url: "../../actions/post/get_posts_circles.php",
                type: "post",
                data: {"circle_ids":selected_circle_ids},
                success: function(data){
                    //console.log(data);

                    try{
                        var response = $.parseJSON(data);
                        if (response.success != null){
                            $(".right-panel-posts").html(response.html);
                        }
                    }catch(exp){
                        $(".right-panel-posts").html("Error fetching data... please try again");
                    }
                },
                error: function(){
                    console.log("error ajax");
                    $(".right-panel-posts").html("Error fetching data... please try again");
                }
            });
        }

    });
});