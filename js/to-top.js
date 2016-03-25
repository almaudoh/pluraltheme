jQuery(document).ready(function($) { 
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $("#toTop").fadeIn();	
        } else {
            $("#toTop").fadeOut();
        }
    });

    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });



        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
});

