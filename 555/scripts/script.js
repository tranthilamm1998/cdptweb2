
$(document).ready(function () {

//RELOAD PAGE WHEN RESIZE
    window.onresize = function (event)
    {
        document.location.reload(true);
    }

    var count = 2;
    $('.mobileMenuTitle').click(function () {
        if (count % 2 == 0) {
            $('.mega-menu-ul').css("display", "block");
            count = 3;
        } else {
            $('.mega-menu-ul').css("display", "none");
            count = 2;
        }
    });

//    DROPDOWN
    if ($(window).width() > 728) {
        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                    $(this).toggleClass('open');
                }
        );
    }


//CAROUSEL SLIDE
    $('.carousel[data-type="multi"] .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if ($(window).width() > 980) {
            for (var i = 0; i < 3; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        } else if ($(window).width() > 728) {
            for (var i = 0; i < 1; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        } else if ($(window).width() < 728) {
            for (var i = 0; i < 0; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

            }
        }
    });

});
