$(document).ready(function() {
    $('#sliderHome').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        fade: true,
        autoplaySpeed: 3000,
        prevArrow: "<div class='btn-control btn-next'></div>",
        nextArrow: "<div class='btn-control btn-previous'></div>"
    });

    $('#slideSection').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        fade: true,
        autoplaySpeed: 2000,
    });

    var hieghtThreshold = $(".sidebar__border").offset().top + $(".sidebar__border").height();

    var offsetMenu = $('#pmenu').offset().top;

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= $('#footer').offset().top - $(window).height()) {
            $('#btnTop').removeClass('hidden');
        } else {
            $('#btnTop').addClass('hidden');
        }



        if (scroll >= offsetMenu) {
            if (!$('#pmenu').hasClass('fixed')) {
                $('#pmenu').addClass('fixed');
                $('.menu-item-has-children').children('.sub-menu').css('top', 50);
            }
        } else {
            $('#pmenu').removeClass('fixed');
            $('.menu-item-has-children').children('.sub-menu').css('top', (offsetMenu - scroll) + 25);
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

    // $('.menu-item-has-children').hover(
    //     function() {
    //         $(this).children('.sub-menu').css('top', offsetMenuDynamic + 50);
    //         $(this).addClass('hover');
    //     },
    //     function() { $(this).removeClass('hover'); }
    // );


    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    $(window).resize(function() {
        if (windowWidth != $(window).width() || windowHeight != $(window).height()) {
            location.reload();
            return;
        }
    });
});