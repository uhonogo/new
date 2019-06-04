(function ($) {

    'use strict';

    $(document).ready( function() {
        $('.top_slider').slick({
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: false,
          autoplaySpeed: 4000,
        });
        $('.posts_gallery').slick({
          dots: true,
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [
            {
              breakpoint: 1300,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 940,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
        
    });
    $(window).ready( function () {
      var parent_Cat, submenu, device_width

      device_width = $(window).width()
      parent_Cat = $('li.menu-item-has-children')
      submenu = $('.sub-menu')

      $(window).on('resize', function () {

        device_width = $(window).width()

        if (device_width > 960) {
          var remove_submenuClass = parent_Cat.find('.sub-menu').removeClass('clicked')
          var remove_mainNavClass = $('.main-navigation').removeClass('toggled')
          var remove_buttonAria   = $('.menu-toggle').attr( 'aria-expanded', 'false')
          var remove_menuAria     = $('.nav-menu').attr( 'aria-expanded', 'false' )
        } else {
          return
        }
      })
      parent_Cat.click( function (event) {
        event.stopPropagation()
        var current_id = $(this).attr('id')
        return $('#' + current_id).children('.sub-menu').toggleClass('clicked')
      })

    })

})(jQuery);