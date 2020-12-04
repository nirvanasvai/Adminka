$(document).ready(function() {
    $('body').css({ 'opacity': '1', 'background': 'transparent' })
    AOS.init();
    $('.js_select2').select2({
        minimumResultsForSearch: Infinity,
    });
    $('.link_to_work').click(function(e) {
        e.preventDefault();

    });
    $('.burger_menu').click(function() {
        $('.header_mobile').toggleClass('header_mobile_active')
    })
    $('.select2, .select2-results__option').click(function(e) {
        $('.lang').addClass('active_dropdown')
        if ($(this).hasClass('select2-container--open')) {
            $('.lang').addClass('active_dropdown')
        } else {
            $('.lang').removeClass('active_dropdown')
        }
    });
    $(document).mouseup(function(e) {
        if ($('.select2').hasClass('select2-container--open')) {} else {
            $('.lang').removeClass('active_dropdown')
        }
    });
    $('.main_slider, .about_banner_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000
    });
    $('.slider_working_process').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                }
            }
        ]

    });

    let sliderCount = {
        addZeros: function(n) {
            return (n < 10) ? +n : '' + n;
        }
    };

    function sliderInit() {
        let $slider = $('.comment_slider');
        $slider.each(function() {
            var $sliderParent = $(this).parent();
            $(this).slick({
                autoplay: true,
                infinite: true,
                speed: 500,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                appendDots: $('.append_dots'),
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            adaptiveHeight: true,
                        }
                    }
                ]
            });


            if ($(this).find('.item').length > 1) {
                $(this).siblings('.slides-numbers').show();
            }

            $(this).on('afterChange', function(event, slick, currentSlide) {
                $sliderParent.find('.slides-numbers .active').html(sliderCount.addZeros(currentSlide + 1));
            });

            var sliderItemsNum = $(this).find('.slick-slide').not('.slick-cloned').length;
            $sliderParent.find('.slides-numbers .total').html(sliderCount.addZeros(sliderItemsNum));
        });

        $('.slick-next').on('click', function() {
            $('.main-slider').slick('slickGoTo', 1);
        });

    };
    sliderInit();

    $('.gallery_img').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
                // openerElement is the element on which popup was initialized, in this case its <a> tag
                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });


    $('.card_toggle').click(function() {
        $(this).toggleClass('card-active');
        $(this).next($('.card-body')).slideToggle();

    });


    let size = 195;
    let text = $('.card_text');

    text.each(function() {
        if ($(this).text().length > size) {
            $(this).text($(this).text().slice(0, size) + '...')
        }
    });
    let pathName = document.location.pathname;
    let splitPath = pathName.split('/');
    let link = $('.nav ul li a');
    link.each(function() {
        if ($(this).attr('href').slice(2) === splitPath[2]) {
            $(this).addClass('active_link')
        } else {}
    })
});