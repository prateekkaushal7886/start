// Scroll Down
$(".scroll-down").on('click', function () {
    'use strict';
    $('html,body').animate({
        scrollTop: $("#view").offset().top
    },
        'slow');
});

// Nice Scroll
$(function () {
    'use strict';
    $("html").niceScroll({
        cursorcolor: "#bdd96b",
        cursorborder: 'none',
        zindex: 999
    });
});

