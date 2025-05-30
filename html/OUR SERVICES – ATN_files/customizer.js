/**
 ** Slider -start
 */
jQuery(document).ready(function ($) {
    $(".single-video").slice(0, 9).show();
    $("#loadMore").on("click", function (e) {
        e.preventDefault();
        $(".single-video:hidden").slice(0, 3).slideDown();
        if ($(".single-video:hidden").length == 0) {
            $("#loadMore").addClass("noContent");
        }
    });

    new WOW().init();

    $('.menu-tigger').on('click', function () {
        $(this).toggleClass('button-tigger');
        $('nav').toggleClass('res-menu');
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let splideElements = document.querySelectorAll("#latest_blog_post_slider");

    splideElements.forEach(function (element) {
        let splide = new Splide(element, {
            type: "loop",
            perPage: 3,
            gap: "30px",
            arrows: false,
            pagination: true,
            breakpoints: {
                776: {
                    perPage: 1
                }
            }
        });

        splide.mount();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let splideElements = document.querySelectorAll("#clients-review-splide");

    splideElements.forEach(function (element) {
        let splide = new Splide(element, {
            type: "loop",
            perPage: 2,
            gap: "30px",
            arrows: true,
            pagination: false,
            breakpoints: {
                776: {
                    perPage: 1
                }
            }
        });

        splide.mount();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let splideElements = document.querySelectorAll("#service-caro");

    splideElements.forEach(function (element) {
        let splide = new Splide(element, {
            type: "loop",
            perPage: 3,
            gap: "30px",
            arrows: false,
            pagination: true,
            breakpoints: {
                776: {
                    perPage: 1
                }
            }
        });

        splide.mount();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let splideElements = document.querySelectorAll("#ourbestclientslider");

    splideElements.forEach(function (element) {
        let splide = new Splide(element, {
            type: "loop",
            perPage: 1,
            gap: "30px",
            arrows: false,
            pagination: true,
            breakpoints: {
                776: {
                    perPage: 1
                }
            }
        });

        splide.mount();
    });
});

//jQuery(document).ready(function ($) {
//    $('.popup-video').magnificPopup({
//        disableOn: 700,
//        type: 'iframe',
//        mainClass: 'mfp-fade',
//        removalDelay: 160,
//        preloader: false,
//        fixedContentPos: false
//    });
//});
// document.addEventListener("DOMContentLoaded", function () {
//     let gamePoster = new Splide("#game_poster", {
//         type: "fade",
//         pagination: false,
//         arrows: false,
//         cover: true,
//     });

//     let thumbnails = new Splide("#gameThumbnails", {
//         rewind: false,
//         isNavigation: true,
//         gap: 0,
//         pagination: false,
//         cover: true,
//         arrows: false,
//     });

//     gamePoster.sync(thumbnails);
//     gamePoster.mount();
//     thumbnails.mount();
// });

// var splide = new Splide( '.splide' );
// splide.mount();

/*Slider -End */



// var splide = new Splide( '.splide' );
// splide.mount();

/*Slider -End */