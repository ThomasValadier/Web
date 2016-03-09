$(document).ready(function () {

    $(window).scroll(function () {
        posScrol = $(document).scrollTop();
        if (posScrol >= 100) {
            $('.to_top').fadeIn(600);

        }
        else {
            $('.to_top').fadeOut(600);
            $("html, body").animate({scroll: 0}, 1000);
        }
        if (posScrol >= 35) {
            $('.foot').fadeIn(10);
        }
        else
            $('.foot').fadeOut(10);
        if (posScrol >= 400) {
            $('.foot').animate({bottom: '200px'}, 10);
            $('.finish').fadeIn(10);
        }
        else {
            $('.finish').fadeOut(10);
            $('.foot').animate({bottom: '0'}, 10);
        }

    });


});

jQuery(document).ready(function () {
    jQuery('#toggle').hide();
    jQuery('#togglerup').hide();

    jQuery('a#toggler').click(function () {
        jQuery('#toggle').toggle(400);
        $('a#toggler').hide();
        $('#togglerup').toggle(400);
        $("html, body").animate({scroll: 200}, 10);
    });
    jQuery('a#togglerup').click(function () {
        jQuery('#toggle').hide(400);
        $('a#togglerup').hide();
        $('#toggler').toggle(400);
    });
});

