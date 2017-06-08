/**
 *
 * Custom JS written for this site
 *
 */

( function( $ ) {

  // Script for the Floating Share buttons
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


} )( jQuery );
