/**
 * Created by Pavel Nikitin on 19.05.2017.
 */

// sliders

$(document).ready(function () {
    var slickPrevArrow = '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>';
    var slickNextArrow = '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>';
    $('.js-servicesSlider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        appendArrows: $('.js-servicesSlider-arrows'),
        prevArrow: slickPrevArrow,
        nextArrow: slickNextArrow,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.js-advantagesSlider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendArrows: $('.js-advantagesSlider-arrows'),
        prevArrow: slickPrevArrow,
        nextArrow: slickNextArrow,
        fade: true
    });
    $('.js-aboutSlider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        dots: false
    });
    $(document).on('click', '.js-changeSlide', function (e) {
        e.preventDefault();
        var slide = $(this).data('slide');
        $('.js-aboutSlider').slick('slickGoTo', slide);
        $(this).find('img').addClass('active');
        $(this).siblings('a').find('img').removeClass('active');
    });
    $(document).on('click', '.js-goNext', function (e) {
        e.preventDefault();
        $('.js-aboutSlider').slick('slickNext');
        var current = $('.js-aboutSlider').slick('slickCurrentSlide');
        $('.c-about__image.active').removeClass('active');
        $('.js-changeSlide[data-slide=' + current + ']').find('img').addClass('active');
    })
});

// map

ymaps.ready(initMap);
var map;

function initMap() {
    map = new ymaps.Map("map", {
        center: [55.76, 37.64],
        zoom: 7
    });
    map.behaviors.disable('scrollZoom');
    placemark = new ymaps.Placemark(map.getCenter(), {
        hintContent: 'Москва',
        balloonContent: 'Москва'
    }, {
        iconLayout: 'default#image',
        iconImageHref: 'img/map_marker.png',
        iconImageSize: [55, 65],
        iconImageOffset: [-25, -65]
    });
    map.geoObjects.add(placemark);
}

// fixed menu

$(window).on('load', function () {
    var headerHeight = $('.w-header').outerHeight(true);
    var curScroll = $(window).scrollTop();
    toggleBodyClass(curScroll, headerHeight);
    $(document).on('scroll', function () {
        curScroll = $(window).scrollTop();
        toggleBodyClass(curScroll, headerHeight);
    });

});

function toggleBodyClass(curScroll, needScroll) {
    if (curScroll >= needScroll)
        $('body').addClass('fixed').css({marginTop: needScroll + 'px'});
    else
        $('body').removeClass('fixed').css({marginTop: 0});
}


// Cache selectors
var lastId,
    topMenu = $(".js-topMenu"),
    topMenuHeight = $('.w-header').outerHeight(true),
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });

menuItems.click(function(e){
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 300);
    e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
    // Get container scroll position
    var fromTop = $(this).scrollTop()+topMenuHeight;

    // Get id of current scroll item
    var cur = scrollItems.map(function(){
        if ($(this).offset().top < fromTop)
            return this;
    });
    // Get the id of the current element
    cur = cur[cur.length-1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
            .removeClass("active")
            .filter("[href='#"+id+"']").addClass("active");
    }
});

// toggle menu
$(document).ready(function () {
    $(document).on('click', '.js-openMenu', function (e) {
        $('.js-topMenu').animate({right: '0'}, 300);
    });
    $(document).on('click', '.js-hideMenu', function (e) {
        $('.js-topMenu').animate({right: '-100%'}, 300);
    });
});