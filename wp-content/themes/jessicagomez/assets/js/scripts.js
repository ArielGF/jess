/* ---------------------------------------------
 common scripts
 --------------------------------------------- */
;(function ($) {
    'use strict'; // use strict to start

    /* === Menu === */

    (function () {
        $('#category-menu .cat-menu').slicknav({
            prependTo:'.mobile-cat-menu',
            label:''
        })
    }());

    /* === Fitvids js === */
    (function () {
        $(".wpb_wrapper").fitVids();
        $(".entry-content").fitVids();
        $(".entry-video").fitVids();
        $(".entry-audio").fitVids();
    }());


    /* === Masonery gallery === */
    (function () {
        var masonry = $('.gallery');
        $(window).load(function(){
            masonry.masonry();//Masonry
        });
    }());


    /* === Magnific Popup js === */
    (function () {

        $('.gallery-item').magnificPopup({
            delegate: 'a',
            type: 'image',
            // other options
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',

            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });

    }());



})(jQuery);


