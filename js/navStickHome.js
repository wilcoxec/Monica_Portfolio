$(function() {
    // Stick the #nav to the top of the window

    var mwNav = $('#mwNav');
    var workNav = $('#workNav');
    var studioNav = $('#studioNav');
    var contactNav = $('#contactNav');
 
    var mwNav2 = $('#mwNav2');
    var workNav2 = $('#workNav2');
    var studioNav2 = $('#studioNav2');
    var contactNav2 = $('#contactNav2');

    var navBar2 = $('.nav2');
    
    navBar2.css({
        opacity: 0
    });

    mwNav.css({
        color: "white"
    });
    workNav.css({
        color: "white"
    });
    studioNav.css({
        color: "white"
    });
    contactNav.css({
        color: "white"
    });

    $("#workNav").hover(
        function() {
        $(this).css({
            color: "white",

        });
        },
        function(){
            $(this).css("color", "white");
        }
    );

    var navHomeY = mwNav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop() - 10;
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            navBar2.css({
                opacity: 1,
                position: 'fixed',
                top: 0,
                left: 0
            });
            
            mwNav.css({
                opacity: 0
            });
            workNav.css({
                color: "white"
            });
            studioNav.css({
                color: "white"
            });
            contactNav.css({
                color: "white"
            });

            /* Menu that sticks*/
            mwNav2.css({
                color: "white"
            });
            workNav2.css({
                opacity: 0
            });
            studioNav2.css({
                opacity: 0
            });
            contactNav2.css({
                opacity: 0
            });


            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            navBar2.css({
                position: 'static'
            });


            mwNav.css({
                opacity: "white"
            });
            workNav.css({
                color: "white"
            });
            studioNav.css({
                color: "white"
            });
            contactNav.css({
                color: "white"
            });

            /* Menu that sticks*/
            mwNav2.css({
                color: "white"
            });

            workNav2.css({
                opacity: 0
            });
            studioNav2.css({
                opacity: 0
            });
            contactNav2.css({
                opacity: 0
            });
            isFixed = false;
        }
    });
});