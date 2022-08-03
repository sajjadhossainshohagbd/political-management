(function($) {
    "use strict";
    /**
     * Header Area start
     */
    $("body.header-sticky header").addClass("animated");
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $("body.header-sticky header").removeClass("is-sticky");
        } else {
            $("body.header-sticky header").addClass("is-sticky");
        }
    });

    $("header.header-sticky").addClass("animated");
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $("header.header-sticky").removeClass("is-sticky");
        } else {
            $("header.header-sticky").addClass("is-sticky");
        }
    });


    if ($('body').hasClass('logged-in')) {
        var top_offset = $('.header-area').height() - 9;
    } else {
        var top_offset = $('.header-area').height() - 41;
    }

    $('.primary-nav-one-page nav').onePageNav({
        scrollOffset: top_offset,
        scrollSpeed: 750,
        easing: 'swing',
        currentClass: 'active',
    });

    $('body').scrollspy({ target: ".primary-nav-wrap nav" });

    $(".primary-nav-one-page nav ul li:first-child").addClass("active");

    $('.primary-nav-wrap > nav > ul > li').slice(-2).addClass('last-elements');

    /*-- Mobile Menu --*/

    $('.primary-nav-wrap nav').meanmenu({
        meanScreenWidth: mobile_menu_data.menu_width,
        meanMenuContainer: '.mobile-menu',
        meanMenuClose: '<i class="fa fa-times"></i>',
        meanMenuOpen: '<i class="fa fa-bars"></i>',
        meanRevealPosition: 'right',
        meanMenuCloseSize: '25px',
    });

    /*
     * Header Transparent 
     */
    function headerTransparentTopbar() {
        var headerTopbarHeight = $('.header-top-area').innerHeight(),
            trigger = $('.main-header.header-transparent'),
            bodyTrigger = $('body.logged-in .main-header.header-transparent');
        if (trigger.parents().find('.header-top-area')) {
            trigger.css('top', headerTopbarHeight + 'px');
        }
        if (bodyTrigger.parents().find('.header-top-area')) {
            bodyTrigger.css('top', (headerTopbarHeight + 32) + 'px');
        }
    }
    headerTransparentTopbar();

    /**
     * ScrollUp
     */
    function backToTop() {

        var didScroll = false,
            scrollTrigger = $('#back-to-top');

        scrollTrigger.on('click', function(e) {
            $('body,html').animate({ scrollTop: "0" });
            e.preventDefault();
        });

        $(window).scroll(function() {
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                didScroll = false;

                if ($(window).scrollTop() > 250) {
                    scrollTrigger.css('right', 20);
                } else {
                    scrollTrigger.css('right', '-50px');
                }
            }
        }, 250);
    }
    backToTop();

    /**
     * Wow init
     */
    new WOW().init();


    /**
     * Magnific Popup video popup 
     */
    $('a.video-popup').magnificPopup({
        type: 'iframe',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
            }
        },
        gallery: {
            enabled: false
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });

    /**
     * Blog Gallery Post
     */
    $('.blog-gallery').owlCarousel({
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /**
     * Enable Footer Fixed effect
     */
    function fixedFooter() {
        var fooCheck = $('footer').hasClass('fixed-footer-enable');
        if (fooCheck) {
            $('.site-wrapper').addClass('fixed-footer-active');
        }
        var FooterHeight = $('footer.fixed-footer-enable').height(),
            winWidth = $(window).width();
        if (winWidth > 991) {
            $('.fixed-footer-active').css({ 'margin-bottom': FooterHeight });
            $('.fixed-footer-active .site-content').css({ 'background': '#ffffff' });
        } else {
            $('footer').removeClass('fixed-footer-enable');
        }
    }
    fixedFooter();

    /**
     * Page Preloading Effects
     */
    $(window).on('load', function() {
        $(".loading-init").fadeOut(500);
    });


    /**
     * Blog Masonry
     */
    $('.blog-masonry').imagesLoaded(function() {
        // init Isotope
        var $grid = $('.blog-masonry').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item',
            }
        });

    });

    /*--
    	Service Active
    -----------------------------------*/
    $('.single-service')
        .mouseover(function() {
            $('.single-service').removeClass('active');
            $(this).addClass('active');
        });

    $('.portfolio-filter button,.gallery-filter button').on('click', function(event) {
        $(this).siblings('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
        event.preventDefault();
    });
    /*--
    	Counter UP
    -----------------------------------*/
    var counter = $('.counter')
    counter.counterUp({
        delay: 20,
        time: 3000
    });



    /*-- 
        Smoth Scroll
    --------------------------------------------*/
    var scroll = new SmoothScroll('[data-scroll], .donate__now__btn a, .slider-text-animation a');

    /*-- 
        Timeline Process
    --------------------------------------------*/
    var timeLine = $('.timeline');
    var timeLineProces = $('.timeline-proces');
    timeLine.hover(
        function() {
            var timelinePosition = $(this).position().top;
            var timelineHeight = $(this).height();
            var totalHeight = timelinePosition + timelineHeight + 50;

            $(this).addClass('hover').prevAll().addClass('hover');
            timeLineProces.css('height', totalHeight + 'px');
        },
        function() {
            $(this).removeClass('hover').prevAll().removeClass('hover');
            timeLineProces.css('height', '0px');
        }
    )


    /*====== sidebarSearch ======*/
    function sidebarSearch() {
        var searchTrigger = $('button.sidebar-trigger-search'),
            endTriggersearch = $('button.search-close'),
            container = $('.main-search-active');

        searchTrigger.on('click', function() {
            container.addClass('inside');
        });

        endTriggersearch.on('click', function() {
            container.removeClass('inside');
        });

    };
    sidebarSearch();




    /*====== Onepage Sidebar ======*/
    function sidebarNavigtaion() {
        var menuTrigger = $('button.onepage-sidebar-trigger'),
            endTrigger = $('button.op-sidebar-close'),
            container = $('.onepage-sidebar-area'),
            wrapper = $('.site-wrapper'),
            closebtntriger = $('.op_sidebar__header');
        wrapper.prepend('<div class="body-overlay"></div>');


        menuTrigger.on('click', function() {
            container.addClass('inside');
            wrapper.addClass('overlay-active');
            closebtntriger.addClass('politicem-header-side_btn');
        });

        endTrigger.on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
            closebtntriger.removeClass('politicem-header-side_btn');
        });

        $('.body-overlay').on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
        });
    };
    sidebarNavigtaion();



})(jQuery)