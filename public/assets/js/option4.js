(function($){
    "use strict"; // Start of use strict
    /* ---------------------------------------------
     Scripts scroll
     --------------------------------------------- */
    $(window).scroll(function(){
        /* Show hide scrolltop button */
        /* Main menu on top */
        var h = $(window).scrollTop();
        var width = $(window).width();
        if(width > 767){
            if(h > 35){
                $('#main-header').addClass('main-header-ontop');
            }else{
                $('#main-header').removeClass('main-header-ontop');
            }
        }
    });
})(jQuery); // End of use strict