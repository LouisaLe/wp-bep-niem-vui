$(document).ready(function() {
    $('#sliderHome').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        fade: true,
        autoplaySpeed: 4200,
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

    // var hieghtThreshold = $(".sidebar__border").offset().top + $(".sidebar__border").height();

    if ($('#pmenu').length) {
        var offsetMenu = $('#pmenu').offset().top;
    }

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        // if (scroll >= $('#footer').offset.top - $(window).height()) {
        //     $('#btnTop').removeClass('hidden');
        // } else {
        //     $('#btnTop').addClass('hidden');
        // }

        if (scroll >= 500) {
            $('#btnTop').removeClass('hidden');
        } else {
            $('#btnTop').addClass('hidden');
        }

        if (scroll >= 100) {
            $('#shopPage').addClass('fixed-search');
        } else {
            $('#shopPage').removeClass('fixed-search');
        }



        if (offsetMenu && scroll >= offsetMenu) {
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

    $('.mobi-search__toggle').click(function() {
        $('.main-search').toggleClass('fixed');
    });

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    $(window).resize(function() {
        if (windowWidth != $(window).width() || windowHeight != $(window).height()) {
            location.reload();
            return;
        }
    });

    $('.tags__wrapper li').click(function() {
        var el = $(this);
        var selectedID = el.attr('id');
        var targetOffset = $('#d_' + selectedID).offset().top;
        $("html, body").animate({ scrollTop: targetOffset - 180 }, 1000);
    });
});