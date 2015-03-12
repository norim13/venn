$(function() {

    //$('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            if (!$('div.sidebar-collapse').hasClass('collapsed')){
                $('div.sidebar-collapse').addClass('collapsed');
                topOffset = 100; // 2-row-menu
                $("#sidebar").hide();
            }
           
        } else {
            $('div.sidebar-collapse').removeClass('collapsed');
            $('div.sidebar-collapse').show();
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

   /* var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }*/
   
    $("#navbar-toggle-black").click(function(){
        if ($("#sidebar").css('display') == 'none'){
            //$("#sidebar").css('display', 'block');
            
            $("#sidebar").slideDown(700);
        }
        else $("#sidebar").slideUp(700);
    })

});
