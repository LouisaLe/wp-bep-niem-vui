$(document).ready(function() {
    $('#sliderHome').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: "<div class='btn-control btn-next'></div>",
        nextArrow: "<div class='btn-control btn-previous'></div>"
    });

    $('#slideSection').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: false,
        autoplaySpeed: 2000,
    });

    var hieghtThreshold = $(".sidebar__border").offset().top + $(".sidebar__border").height();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        // if (scroll >= hieghtThreshold) {
        //     $('.sidebar__border').addClass('flex');
        // } else {
        //     $('.sidebar__border').removeClass('flex');
        // }

        if (scroll >= $('#footer').offset().top - $(window).height()) {
            // $('.sidebar__border').removeClass('flex');
            $('#btnTop').removeClass('hidden');
        } else {
            $('#btnTop').addClass('hidden');
        }
    });

    var maxHeight = 0;

    $("#anodau .item-list__wrapper .item").each(function() {
        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });

    $("#anodau .item-list__wrapper .item").height(maxHeight);

    $('#btnTop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    $("html, body").click(function() {
        $('#load-data').empty();
    });

    $('.menu-ico').click(function() {
        $('.menu-style').toggleClass('active');
        $('.primary-menu').toggleClass('active');
    });
});