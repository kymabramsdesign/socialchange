/**
 *
 * Custom JS written for Social Change
 *
 */

( function( $ ) {

  // Script for scrollTo Field Notes

  $('a[href*="field-notes"]').on('click', function(e) {
    var screenWidth = $(window).width();
    var target = this.hash;
    var $target = $(target);

    if ( screenWidth <= 767 ) {
      $('html, body').stop().animate({
        'scrollTop': ($target.offset().top) - 70
      }, 700, function () {
        window.location.hash = target;
      });
    }

    else {
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 700, function () {
        window.location.hash = target;
      });
    }
  });

  // Script for toggle Search bar

  $('.search-top').on('click', function() {
    var visible = $('.widget-area').hasClass('visible');

    if ( visible == false ) {
      $('.widget-area').addClass('visible').slideDown('200', function() {
        $('.search-field').focus();
      });
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
        $('.site-header, .search-top, .responsive-menu-button, .widget-area, .single-post, .watermark').addClass('scrolled');
      }
      else {
        $('.site-header, .search-top, .responsive-menu-button, .widget-area, .single-post, .watermark').removeClass('scrolled');
      }
    }

    // Home Page Specific Header Script
    if ( isHome == true ) {
      var screenHeight = $(window).height();
      var titlePosition = contentArea.top;

      if ( screenWidth <= 767 ) {
        contentArea = contentArea.top - screenHeight + 25; // matches the margin-top of the .content-area
        if ( scrollPosition >= (screenHeight-440) ) {
          $('.site-branding a img').attr('src', '/wp-content/themes/social-change/img/social-change-orange.png');
          $('.more').css('bottom', '-30px');
        }
        else {
          $('.site-branding a img').attr('src', '/wp-content/themes/social-change/img/social-change-white.png');
        }

        if ( scrollPosition >= (screenHeight-390) ) {
          $('.issue-date').css('color','#fff');
        }
        else {
          $('.issue-date').css('color','#000');
        }

        if ( scrollPosition >= (screenHeight-340) ) {
          $('.issue-title').css('color','#fff');
        }
        else {
          $('.issue-title').css('color','#000');
        }

        if ( scrollPosition >= (screenHeight/2) ) {
          $('.site-description').fadeOut();
        }
        else {
          $('.site-description').fadeIn();
        }

        if ( scrollPosition >= (screenHeight/1.75) ) {
          $('.site-header, .search-top, .responsive-menu-button, .widget-area, .watermark').addClass('scrolled');
          $('.issue-title').css('top', 280);
          $('.issue-date').css('top', 315);
        }
        else {
          $('.site-header, .search-top, .responsive-menu-button, .watermark').removeClass('scrolled');
          $('.issue-title').css('top', '375px');
          $('.issue-date').css('top', '410px');
        }

        if ( scrollPosition >= (screenHeight-77) ) {
          $('.issue-title, .issue-date').fadeOut(800);
        }
        else {
          $('.issue-title, .issue-date').fadeIn(400);
        }

        if ( scrollPosition >= (screenHeight-50) ) {
          $('.carousel .owl-carousel .owl-item .item a').css('opacity', 1);
        }
        else {
          $('.carousel .owl-carousel .owl-item .item a').css('opacity', 0);
        }
      }

      else {
        contentArea = contentArea.top - 87;
        var videoHeight = $('.fullscreen-bg__video').height() - 300; // video minus the top

        if ( scrollPosition >= 349 ) {
          $('.fullscreen-bg').css('top', 0 );
          $('.image-container').css({
            top: 0,
            position: 'fixed'
          });
        }

        else if ( scrollPosition >= videoHeight ) {
          $('.main-title, .links').addClass('scrolled');
        }
        else {
          $('.main-title, .links').removeClass('scrolled');
          $('.fullscreen-bg, .image-container').css({
            top: (349-scrollPosition)
          });
        }
        if ( scrollPosition >= 100 ) {
          $('.site-branding a img').attr('src', '/wp-content/themes/social-change/img/social-change-orange.png');
          $('.site-description').fadeOut();
          $('.more').css('bottom', '-30px');
        }
        else {
          $('.site-branding a img').attr('src', '/wp-content/themes/social-change/img/social-change-white.png');
          $('.site-description').fadeIn();
        }

        if ( scrollPosition >= 250 ) {
          $('.site-header, .search-top, .responsive-menu-button, .widget-area, .watermark').addClass('scrolled');
          $('.link-overlay').fadeIn();
          $('.issue-title, .issue-date').css('color','#fff');
        }
        else {
          $('.site-header, .search-top, .responsive-menu-button, .watermark').removeClass('scrolled');
          $('.link-overlay').fadeOut();
          $('.issue-title, .issue-date').css('color','#000');
        }

        if ( scrollPosition >= (titlePosition-300) ) {
          $('.issue-title, .issue-date').fadeOut(200);
        }
        else {
          $('.issue-title, .issue-date').fadeIn(400);
        }
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
          '-webkit-transform': 'translate3d(0, 0, 0)',
          '-ms-transform': 'translate3d(0, 0, 0)',
          'transform': 'translate3d(0, 0, 0)',
          '-webkit-transition': 'all .3s ease-in-out',
          '-o-transition': 'all .3s ease-in-out',
          'transition': 'all .3s ease-in-out'
        });
        $('.left-item a, .right-item a').css('color', '#000');
        $('.preview').css('background', '#fff');
      })
      .on('mouseout', function() {
        $('.preview.next-image').css({
          '-webkit-transform': 'translate3d(300px, 0, 0)',
          '-ms-transform': 'translate3d(300px, 0, 0)',
          'transform': 'translate3d(300px, 0, 0)'
        });
        $('.left-item a, .right-item a').css('color', '#727272');
        $('.preview').css('background', 'transparent');
      });

      $('.left-item, .preview.previous-image').on('mouseover', function() {
        $('.preview.previous-image').css({
          '-webkit-transform': 'translate3d(0, 0, 0)',
          '-ms-transform': 'translate3d(0, 0, 0)',
          'transform': 'translate3d(0, 0, 0)',
          '-webkit-transition': 'all .3s ease-in-out',
          '-o-transition': 'all .3s ease-in-out',
          'transition': 'all .3s ease-in-out'
        });
        $('.left-item a, .right-item a').css('color', '#000');
        $('.preview').css('background', '#fff');
      })
      .on('mouseout', function() {
        $('.preview.previous-image').css({
          '-webkit-transform': 'translate3d(-300px, 0, 0)',
          '-ms-transform': 'translate3d(-300px, 0, 0)',
          'transform': 'translate3d(-300px, 0, 0)'
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
          'opacity' : 1
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
          var pageCenter = (($(window).height()) / 2) - 74;
          var topDistance = ($('.article-content p').offset().top) - pageCenter;
          var relatedDistance = $('.related-comment').offset().top - (pageCenter + 142);

          if ( (topDistance) < scrollTop ) {
            $('.a2a_floating_style').css({
              'top' : pageCenter,
              'position' : 'fixed'
            });
          }
          else {
            $('.a2a_floating_style').css({
              'top' : offset,
              'position' : 'absolute'
            });
          }

          if ( relatedDistance < scrollTop ) {
            $('.single-post .a2a_floating_style').each( function() {
              this.style.setProperty( 'z-index', '-1', 'important');
            });
          }
          else {
            $('.single-post .a2a_floating_style').css('z-index', 'initial');
          }
        });
      }
    });

    // Initialize and configure Owl Carousel for Related Stories
    $('.owl-carousel.related').owlCarousel({
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

    // Initialize and configure Owl Carousel for 8 Things you can do
    $('.owl-carousel.eight').owlCarousel({
      loop: false,
      margin: 20,
      stagePadding: 100,
      nav: false,
      responsive:{
        0:{
            items:1,
            stagePadding: 60
        },
        450:{
            items: 2,
            stagePadding: 60
        },
        910:{
            items:3
        },
        1130:{
            items:4
        },
        1367:{
            items:5
        },
        1600:{
            items:6
        }
      }
    })

    // Initialize and configure Owl Carousel for Travel Ban
    $('.owl-carousel.ban').owlCarousel({
      loop: false,
      margin: 80,
      stagePadding: 170,
      nav: false,
      responsive:{
        0:{
            items:1,
            margin: 20,
            stagePadding: 80
        },
        700:{
            items: 2,
            margin: 40,
            stagePadding: 75
        },
        900:{
            items:2,
            margin: 70,
            stagePadding: 140
        },
        1025:{
            items:3
        },
        1600:{
            items:4
        }
      }
    })

    // Initialize and configure Owl Carousel for Day After Quotes
    $('.owl-carousel.quote').owlCarousel({
      loop: false,
      margin: 20,
      stagePadding: 120,
      nav: false,
      responsive:{
        0:{
            items:1,
            margin: 20,
            stagePadding: 40
        },
        500:{
            items:1,
            margin: 20,
            stagePadding: 100
        },
        1100:{
            items:2
        }
      }
    })

    // Play button for video on President's page
    $('.play-button, .video-page-overlay').on('click', function() {

      if ( $('.video-container').is(':hidden') ) {
        $('.video-container, .video-page-overlay').fadeIn();
        $('#video')[0].play(); // comment out if you don't want the video to autoplay
      }

      else {
        $('#video')[0].pause();
        $('.video-container, .video-page-overlay').fadeOut();
      }
    });
  }

  // Get Functions for HomePage
  if ( isHome == true ) {

    // more blink arrow
    var scrollPosition = $(this).scrollTop();

    if (scrollPosition == 0) {
      function blinker() {
        $('.more').fadeOut(700);
        $('.more').fadeIn(700);
        setTimeout(blinker, 2500);
      }
      setTimeout(blinker, 4000);
    }

    var windowWidth = $(window).width();

    if ( windowWidth <= 767 ) {

      var image1 = $('.image-1').attr('src');

      $('.fullscreen-bg').css('display', 'none');
      $('.image-container').css({
        'background-image': 'url(' + image1 +')',
        opacity: 1
      });

    // Initialize and configure Owl Carousel for DHome Page
    $('.owl-carousel.featured-stories').owlCarousel({
      center: true,
      loop: true,
      items: 1,
      dots: true
    })
  }

  else {

    // Script for Home Page large images and links
    var image1 = $('.image-1').attr('src');
    var image2 = $('.image-2').attr('src');
    var image3 = $('.image-3').attr('src');
    var image4 = $('.image-4').attr('src');
    var image5 = $('.image-5').attr('src');

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

        $('.fullscreen-bg').css('opacity', 0);

        if ( currentStory == 'link-1') {
          $('.image-container').css({
            'background-image': 'url(' + image1 +')',
            'opacity': 1 });
        }
        else if ( currentStory == 'link-2') {
          $('.image-container').css({
            'background-image': 'url(' + image2 +')',
            'opacity': 1 });
        }
        else if ( currentStory == 'link-3') {
          $('.image-container').css({
            'background-image': 'url(' + image3 +')',
            'opacity': 1 });
        }
        else if ( currentStory == 'link-4') {
          $('.image-container').css({
            'background-image': 'url(' + image4 +')',
            'opacity': 1 });
        }
        else if ( currentStory == 'link-5') {
          $('.image-container').css({
            'background-image': 'url(' + image5 +')',
            'opacity': 1 });
        }
      }
    });
  }
}


} )( jQuery );
