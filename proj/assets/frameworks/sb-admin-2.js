$(function() {

    //$('#side-menu').metisMenu();

});
var width = 0;
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
             	$("#page-wrapper").css('margin-top', 100);
            }

            if (!$('#search-field').hasClass('collapsed')){
            	
            	$('#search-field').addClass('collapsed');
            	$("#search-field").hide();
            	$("#search-field").css({"top": 170});
            }

           
        } else {
            $('div.sidebar-collapse').removeClass('collapsed');
            $('div.sidebar-collapse').show();
            $("#page-wrapper").css('margin-top', 50); 

            var search_position = $("#search-toggle").offset();
            
            $("#search-field").hide();
            $("#search-field").removeClass('collapsed');
            $("#search-field").css({"top": search_position['top']});
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
            
            $("#sidebar").slideDown(500);
        }
        else{
        	$("#sidebar").slideUp(500);
        	$("#search-field").slideUp(500);
        } 
    })


    $("#search-toggle").click(function(){
    	

    	width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    	console.log(width);
    	if (width < 768) {
    	   	if ($("#search-field").css('display') == 'none'){
    	           console.log('devia mostrar');
    	           $("#search-field").slideDown(400);
    	       }
		    else{
			    $("#search-field").slideUp(400);
		    }
    	   
    	} else {
    		console.log("display: "+$("#search-field").css('display'));
    		console.log("height: "+$("#search-field").css('height'));
    		console.log("width: "+$("#search-field").css('width'));

	    	if ($("#search-field").css('display') == 'none'){
	            console.log('devia mostrar');
	            $("#search-field").show('slide', {direction: 'left'}, 400);
	        }
	        else{
	        	$("#search-field").hide('slide', {direction: 'left'}, 400);
	        }
    	}

    	

    })
});


