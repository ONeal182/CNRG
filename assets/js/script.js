/* Dropdown menu catalog */
$('.dropdown__catalog-item').hover(function() {
    $(this).find('.dropdown__catalog-item-list').addClass('hover');
}, function() {
    $(this).find('.dropdown__catalog-item-list').removeClass('hover');
})


/* Price product */
$('.add-cart__position .quanity__add input').on('change', function() {
    var quanity = 0;
    $('.add-cart__position .quanity__add input').each(function() {
        quanity = quanity + parseInt($(this).val());
    })
    $('.quanity_add span').html(quanity);


    var price_one = parseFloat($('.price__one span').html());
    $('.price__add span').html(price_one * quanity);
});

/* Trust logo homepage */
$('.slider__trust').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    // centerMode: true,
    // centerPadding: '400px',
    infinite: true,
    prevArrow: $('.trust-logo__section .slider__arrow-left'),
    nextArrow: $('.trust-logo__section .slider__arrow-right'),
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding: '100px'

            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '50px'

            }
        }
    ]
});

/* Nav pills slick slider*/
// $('.nav-pills').each(function() {
//   var $this = $(this);

//   $this.on('show.bs.tab', function(e) {
//     $(e.relatedTarget).removeClass('active');
//     $this.slick('slickGoTo', $(e.target).closest('.slick-slide').index());
//     console.log($(e.target).closest('.slick-slide').index());
//   });

//   $this.slick({
//     slidesToShow: 5,

//     dots: false,
//     arrows: false,
//     infinite: false,
//     touchMove: true,
//     swipeToSlide: false,
//     draggable: true,
//     variableWidth: true,
//     focusOnSelect: false,
//     responsive: [{
//       breakpoint: 992,
//       settings: {
//         focusOnSelect: true,
//       }
//     }, ]
//   });
// });


/* Slider product */
$('.slider__product').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: true,
    dots: true,
    appendDots: $('.newcollection__section .slider__dots'),
    prevArrow: $('.newcollection__section .slider__arrow-left'),
    nextArrow: $('.newcollection__section .slider__arrow-right'),
    responsive: [{
            breakpoint: 1080,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

/* Portfolio slider homepage */
$('.portfolio__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    centerMode: true,
    centerPadding: '13%',
    prevArrow: $('.portfolio__section .slider__arrow-left'),
    nextArrow: $('.portfolio__section .slider__arrow-right'),
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '9%',
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '20px'

            }
        }
    ]
});


/* Print slider homepage */
$('.slider__print').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    centerMode: true,
    centerPadding: '13%',
    prevArrow: $('.print__arrow .slider__arrow-left'),
    nextArrow: $('.print__arrow .slider__arrow-right'),
    responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                centerPadding: '100px'

            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '50px'

            }
        }
    ]
});

/* Collections slider / mobile */
$('.collection__slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    appendDots: $('.collections__section .slider__dots'),
    centerPadding: '10px',
    prevArrow: $('.collections__section .slider__arrow-left'),
    nextArrow: $('.collections__section .slider__arrow-right'),
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});


/* Reviews slider homepage */
$('.reviews__slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,

    prevArrow: $('.reviews__section .slider__arrow-left'),
    nextArrow: $('.reviews__section .slider__arrow-right'),
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1

            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '50px'

            }
        }
    ]
});



/* News slider homepage */
$('.news__slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,

    prevArrow: $('.news__section .slider__arrow-left'),
    nextArrow: $('.news__section .slider__arrow-right'),
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding: '100px'

            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '50px'

            }
        }
    ]
});



/* Multiplie filter */

$('.filter-multiple').multipleSelect();

/* Slider for product page */

$('.product-page__img-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.product-page__img-thumbs'
});
$('.product-page__img-thumbs').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.product-page__img-slider',
    dots: false,
    prevArrow: $('.thumbs_with-arrow .slider__arrow-left'),
    nextArrow: $('.thumbs_with-arrow .slider__arrow-right'),
    focusOnSelect: true
});