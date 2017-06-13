/**
 *
 * Custom JS written for Social Change
 *
 */

( function( $ ) {

  // Initialize and configure Owl Carousel

  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 18,
    stagePadding: 60,
    nav: false,
    responsive:{
        0:{
            items:1
        },
        425:{
            items:2
        },
        768:{
            items:3
        },
        1120:{
            items:4
        },
        1440:{
            items:5
        }
    }
  })

  // Script for the Floating Share buttons
  $(window).on('load resize', function(e) {
  var windowWidth = $(window).width();

    if (windowWidth <= 767 ) {
      var contentPosition = $('.article-content p').offset();
      var offset = contentPosition.top;

      $('.a2a_floating_style').css({
        'top' : offset,
        'position' : 'absolute'
      });
    }

    else {
      var contentPosition = $('.article-content p').offset();
      var offset = contentPosition.top;

      $('.a2a_floating_style').css({
        'top' : offset,
        'position' : 'absolute'
      });

      $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();

        var topDistance = ($('.article-content p').offset().top) - 30;

        if ( (topDistance) < scrollTop ) {
          $('.a2a_floating_style').css({
            'top' : '30px',
            'position' : 'fixed'
          });
        }

        else {
          $('.a2a_floating_style').css({
            'top' : offset,
            'position' : 'absolute'
          });
        }
      });
    }
  });

  // $(window).on('resize', function() {
  //   var windowWidth = $(window).width();

  //   if (windowWidth <= 767 ) {
  //     var contentPosition = $('.article-content p').offset();
  //     var offset = contentPosition.top;

  //     $('.a2a_floating_style').css({
  //       'top' : offset,
  //       'position' : 'absolute'
  //     });
  //   }

  //   else {
  //     var contentPosition = $('.article-content p').offset();
  //     var offset = contentPosition.top;

  //     $('.a2a_floating_style').css({
  //       'top' : offset,
  //       'position' : 'absolute'
  //     });

  //     $(window).on('scroll', function() {
  //       var scrollTop = $(this).scrollTop();

  //       var topDistance = ($('.article-content p').offset().top) - 30;

  //       if ( (topDistance) < scrollTop ) {
  //         $('.a2a_floating_style').css({
  //           'top' : '30px',
  //           'position' : 'fixed'
  //         });
  //       }

  //       else {
  //         $('.a2a_floating_style').css({
  //           'top' : offset,
  //           'position' : 'absolute'
  //         });
  //       }
  //     });
  //   }
  // });


} )( jQuery );
