/**
 *
 * Custom JS written for Social Change
 *
 */

( function( $ ) {

  // Script for toggle Search bar

  $('.search').on('click', function() {
    var visible = $('.widget-area').hasClass('visible');

    if ( visible == false ) {
      $('.widget-area').addClass('visible').slideDown('200');
      $(this).delay('1000').css({
        'background-image': 'url(/wp-content/themes/social-change/img/exit.png)',
        'background-size': '90%'
      });
    }
    else {
      $('.widget-area').removeClass('visible').slideUp('fast');
      $(this).delay('1000').css({
        'background-image': 'url(/wp-content/themes/social-change/img/search.png)',
        'background-size': '100%'
      });
    }
  });

  // Script for toggle of Related News & Comments, and Homepage Field Notes Section

  $('.toggle-buttons div').on('click', function() {
    var active = $(this).hasClass('active');

    if (active == true) {
      // Do nothing
    }
    else {
      var whichSection = $(this).attr('class');

      $('.toggle-buttons div').removeClass('active');
      $(this).addClass('active');

      if ( whichSection == 'comments-button') {
        $('.related-articles').hide();
        $('.comments-area').fadeIn();
      }
      else if ( whichSection == 'related-news') {
        $('.comments-area').hide();
        $('.related-articles').fadeIn('slow');
      }
      else if ( whichSection == 'blog-button') {
        $('.news, .media').hide();
        $('.blog').fadeIn('slow');
      }
      else if ( whichSection == 'news-button') {
        $('.blog, .media').hide();
        $('.news').fadeIn('slow');
      }
      else if ( whichSection == 'media-button') {
        $('.blog, .news').hide();
        $('.media').fadeIn('slow');
      }
      return false;
    }
  });

  // Script for Header Resize on Scroll

  $(window).scroll(function() {
    var screenWidth = $(this).width();
    var scrollPosition = $(this).scrollTop();
    var contentArea = $('.content-area').offset();
    var isHome = $('body').hasClass('home');

    // Header functions for the whole site, except the Home Page

    if ( isHome == false ) {

      if ( screenWidth <= 767 ) {
        contentArea = contentArea.top - 180 ;
      }
      else {
        contentArea = contentArea.top + 53;
      }

      if ( scrollPosition >= contentArea ) {
        $('.site-header, .search, .responsive-menu-button, .widget-area, .single-post').addClass('scrolled');
      }
      else {
        $('.site-header, .search, .responsive-menu-button, .widget-area, .single-post').removeClass('scrolled');
      }
    }

    // Home Page Specific Header Script
    if ( isHome == true ) {

      if ( screenWidth <= 767 ) {
        contentArea = contentArea.top - 180;
      }
      else {
        contentArea = contentArea.top - 100;
      }

      if ( scrollPosition >= contentArea ) {
        $('.site-header, .search, .responsive-menu-button, .widget-area').addClass('scrolled');
      }
      else {
        $('.site-header, .search, .responsive-menu-button, .widget-area').removeClass('scrolled');
      }
    }
  });


  // Find out what page a user is on
  var isHome = $('body').hasClass('home');
  var isPost = $('body').hasClass('single');

  // Get Functions for Single Posts
  if ( isPost == true ) {

    // Script for Header reformat on Single Blog post

      $('.right-item, .preview.next-image').on('mouseover', function() {
        $('.preview.next-image').css({
          '-webkit-transform': 'translateX(0)',
          '-ms-transform': 'translateX(0)',
          'transform': 'translateX(0)',
          '-webkit-transition': 'all .3s ease-in-out',
          '-o-transition': 'all .3s ease-in-out',
          'transition': 'all .3s ease-in-out'
        });
        $('.left-item a, .right-item a').css('color', '#000');
        $('.preview').css('background', '#fff');
      })
      .on('mouseout', function() {
        $('.preview.next-image').css({
          '-webkit-transform': 'translateX(300px)',
          '-ms-transform': 'translateX(300px)',
          'transform': 'translateX(300px)'
        });
        $('.left-item a, .right-item a').css('color', '#727272');
        $('.preview').css('background', 'transparent');
      });

      $('.left-item, .preview.previous-image').on('mouseover', function() {
        $('.preview.previous-image').css({
          '-webkit-transform': 'translateX(0)',
          '-ms-transform': 'translateX(0)',
          'transform': 'translateX(0)',
          '-webkit-transition': 'all .3s ease-in-out',
          '-o-transition': 'all .3s ease-in-out',
          'transition': 'all .3s ease-in-out'
        });
        $('.left-item a, .right-item a').css('color', '#000');
        $('.preview').css('background', '#fff');
      })
      .on('mouseout', function() {
        $('.preview.previous-image').css({
          '-webkit-transform': 'translateX(-300px)',
          '-ms-transform': 'translateX(-300px)',
          'transform': 'translateX(-300px)'
        });
         $('.left-item a, .right-item a').css('color', '#727272');
         $('.preview').css('background', 'transparent');
      });

    // Script for the Floating Share buttons
    $(window).on('load resize', function(e) {

      var windowWidth = $(window).width();

      if (windowWidth <= 767 ) {
        var contentPosition = $('.article-content p').offset();
        var offset = contentPosition.top + 2;

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

          var topDistance = ($('.article-content p').offset().top) - 94;

          if ( (topDistance) < scrollTop ) {
            $('.a2a_floating_style').css({
              'top' : '94px',
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
          768:{
              items:2
          },
          850:{
              items:3
          },
          1120:{
              items:3
          },
          1200:{
              items:4
          },
          1600:{
              items:5
          }
      }
    })
  }

  // Get Functions for HomePage
  if ( isHome == true ) {

    // Script for Home Page large images and links

    var image1 = $('.image-1').attr('src');
    var image2 = $('.image-2').attr('src');
    var image3 = $('.image-3').attr('src');
    var image4 = $('.image-4').attr('src');
    var image5 = $('.image-5').attr('src');

    $('.image-container').css('background-image', 'url(' + image1 +')' );

    $('.links li a').on('hover', function() {
      var currentStory = $(this).parent().attr('class');
      var currentImage = $('.image-container').css('background-image');

      if ( (currentImage == ('url("' + image1 +'")')) && (currentStory == 'link-1') ) {
        // Do nothing
      }

      else if ( (currentImage == ('url("' + image2 +'")')) && (currentStory == 'link-2') ) {
        // Do nothing
      }

      else if ( (currentImage == ('url("' + image3 +'")')) && (currentStory == 'link-3') ) {
        // Do nothing
      }

      else if ( (currentImage == ('url("' + image4 +'")')) && (currentStory == 'link-4') ) {
        // Do nothing
      }

      else if ( (currentImage == ('url("' + image5 +'")')) && (currentStory == 'link-5') ) {
        // Do nothing
      }

      else {

        if ( currentStory == 'link-1') {
          $('.image-container').css('background-image', 'url(' + image1 +')' );
        }
        else if ( currentStory == 'link-2') {
          $('.image-container').css('background-image', 'url(' + image2 +')' );
        }
        else if ( currentStory == 'link-3') {
          $('.image-container').css('background-image', 'url(' + image3 +')' );
        }
        else if ( currentStory == 'link-4') {
          $('.image-container').css('background-image', 'url(' + image4 +')' );
        }
        else if ( currentStory == 'link-5') {
          $('.image-container').css('background-image', 'url(' + image5 +')' );
        }
      }

    });
  }


} )( jQuery );
