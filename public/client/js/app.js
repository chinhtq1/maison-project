$(document).ready(function() {
    preLoadController();
    $(window).resize(function() {
        if ($(window).width() <= 768) {
            cssHeader();
        }
    });

    $('.burgerIcon').hover(function() {
            TweenMax.to('.burgerLine:first-child', 0.2, { x: -10 });
            TweenMax.to('.burgerLine:last-child', 0.2, { x: 10 });
        },

        function() {
            TweenMax.to('.burgerLine:first-child', 0.2, { x: 0 });
            TweenMax.to('.burgerLine:last-child', 0.2, { x: 0 });
        });
    var tlmenu = new TimelineMax({ paused: true });

    tlmenu.to('.navMobie', 0.3, { autoAlpha: 1 })
        .staggerFromTo('.navMobie li', 0.5, { y: 100, opacity: 0 }, { y: 0, opacity: 1 }, 0.1);
    $('.burgerIcon').click(function() {
        if ($('html').hasClass('is-main-menu-open')) {
            $('html').removeClass('is-main-menu-open');
            tlmenu.reverse(0);
        } else {
            tlmenu.play(0);
            $('html').addClass('is-main-menu-open');
        }
    });
    $('.closeButton').click(function() {
        tlmenu.reverse(0);
        $('html').removeClass('is-main-menu-open');

    });
    $(".navMobie ul li").click(function() {
        tlmenu.reverse(0);
        $('html').removeClass('is-main-menu-open');
    });

    var center = isTabletScreen();
    $('#owl-carousel-1').owlCarousel({
        lazyLoad: false,
        autoplay: false,
        loop: true,
        nav: false,
        center: center,
        navSpeed: 500,
        items: center ? 2 : 3,
        dots: center ? true : false,
        margin: 40,
        slideSpeed: 300,
        paginationSpeed: 400
    });
    $('#owl-carousel-2').owlCarousel({
        lazyLoad: false,
        autoplay: false,
        loop: true,
        nav: false,
        navSpeed: 500,
        items: 1,
        dots: false,
        margin: 40,
        slideSpeed: 300,
        paginationSpeed: 400,
    });

    $('#scroll_to_top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 700);
        return false;
    });
    scrollEventListener();
    newsSliderController();
    textSliderController();
    addAnimationWhenScroll();
    cssHeader();
    modalController();

});
activeRoute();

function activeRoute() {
    $(document).ready(function() {
        $("header .nav li a").click(function(event) {
            $("header .nav li a").removeClass('active');
            $(this).addClass('active');
        });
    });
}

function scrollEventListener() {
    $(window).scroll(function(event) {
        var scroll = $(window).scrollTop();
        if (scroll == 0) {
            $(".header-background-image a.company-logo").removeClass("outTop");
            $(".fb-logo").removeClass("outRight");
        } else if (scroll > 0) {
            $(".header-background-image a.company-logo").addClass("outTop");
            $(".fb-logo").addClass("outRight");
        }
    });
}

function preLoadController() {
    var count = $('.count');
    var loader = $('#loader');
    $({ Counter: 0 }).animate({ Counter: count.text() }, {
        duration: 4000,
        step: function() {
            count.text(Math.ceil(this.Counter) + "%");
        },
        start: function() {
            $('html').addClass('is-main-menu-open');
        },
        complete: function() {
            setAnimationForSloganWhenFirstScroll();
            initAnimationForAllSection();
            $('html').removeClass('is-main-menu-open');
            $('#loader').css("display", "none");
        }
    });

}

function modalController() {
    $('.more-info-title').click(function() {
        $('html').addClass('is-main-menu-open');
        var id = $(this).data("id");
        getDataArticle(id);
        $('.modal-wrapper ').toggleClass('open');
        $('.modal-wrapper .overlay').toggleClass('open');
        $('.modal-wrapper .modal').toggleClass('open');


    });
    $('.modal-wrapper .overlay').click(function() {
        $('.modal-wrapper ').toggleClass('open');
        $('.modal-wrapper .overlay').toggleClass('open');
        $('.modal-wrapper .modal').toggleClass('open');
        $('html').removeClass('is-main-menu-open');
    });

    $('.intro-post .inner-image-post-container').click(function() {
        $('html').addClass('is-main-menu-open');
        var id = $(this).data("id");
        getDataArticle(id);
        $('.modal-wrapper ').toggleClass('open');
        $('.modal-wrapper .overlay').toggleClass('open');
        $('.modal-wrapper .modal').toggleClass('open');
    });

    return false;
}

function getDataArticle(id) {
    $.ajax({
        type: "GET",
        url: "api/articles/detail/" + id,
        dataType: "json",
        success: function(data) {
            var result = data["data"];
            console.log(result);
            $("#article-image").attr('src', result["main_picture"]);
            $("#article-public-date").text(result["date_public"])
            $("#article-title").text(result["title"])
            $("#article-content").html(result["content"])

        }
    });
}

function cssHeader() {
    var heightHeader = $("header").height();
    $(".header-background-image").css("margin-top", -heightHeader);
}


function initAnimationForAllSection() {
    AOS.init({
        once: false,
        mirror: true,
        delay: 400,
        easing: 'ease-out-back',
        duration: 2000
    });
}

function setAnimationForSloganWhenFirstScroll() {
    $(window).one("scroll", function() {
        $(".test").css("transform", "scaleY(1)");
    });
}

function addAnimationWhenScroll() {
    var image = document.getElementsByClassName('img-header');
    new simpleParallax(image, {
        delay: 2,
        scale: 1.2
    });
}

function newsSliderController() {
    var owl1 = $('#owl-carousel-1');
    // Go to the next item of slider news
    $('.am-next').click(function() {
        owl1.trigger('next.owl.carousel', [300]);
    });

    // Go to the previous news
    $('.am-prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl1.trigger('prev.owl.carousel', [300]);
    });
}

function textSliderController() {
    var owl2 = $('#owl-carousel-2');
    // Go to the next item of slider text
    $('.btn-pre-next-slider').click(function() {
        owl2.trigger('next.owl.carousel', [300]);
    });

    // Go to the previous item of sliderText
    $('.btn-pre-slider').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl2.trigger('prev.owl.carousel', [300]);
    });
}

function isTabletScreen() {
    if (window.matchMedia('screen and (max-width: 768px)').matches) {
        return true;
    } else {
        return false;
    }
}