$(function () {
    // Add scrollspy to <body>
    'use strict';
    $('body').scrollspy({target: ".navbar", offset: 50});
    // Add smooth scrolling on all links inside the navbar
    $("#menuicon a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

           // Using jQuery's animate() method to add smooth page scroll
           // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {
   
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }  // End if
    });
});



// Scroll Down
$(".scroll-down").on('click', function () {
    'use strict';
    $('html,body').animate({
        scrollTop: $("#services").offset().top
    },
        'slow');
});

// Navbar
$(function () {
    'use strict';
    $(window).scroll(function () {
        var navbar = $('.navbar');
        if ($(window).scrollTop() >= navbar.height()) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }
    });
});

// Toggle
function myFunction(x) {
    'use strict';
    x.classList.toggle("change");
}

// Duration is the amount of time in between slides,
  // and fade is value that determines how quickly the next image will fade in
$(function () {
    'use strict';
    $('.hero-img').backstretch([
        "img/background/1.jpg",
        "img/background/2.jpg",
        "img/background/3.jpg"
    ], {
        duration: 3000,
        fade: 750
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
        $('.testimonials-container').backstretch("resize");
    });
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

// Scroll Top 
$(function () {
    'use strict';
    var scrollButton = $("#scroll-top");
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            scrollButton.show();
        } else {
            scrollButton.hide();
        }
    });
    scrollButton.on('click', function () {
        $("html,body").animate({scrollTop: 0}, 2000);
    });
});

// Loading Overlay
$(window).on('load', function () {
    'use strict';
    $(".loading-overlay").fadeOut(1000);
});

// Date Picker
$(function () {
    'use strict';
    $(".datepicker").datepicker();
});