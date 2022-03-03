(function($) {

  // Open nav menu slide
  // --------------------------------------------------------------------------
  $('.menu-icon').on('click', function (e) {
    e.preventDefault();
    $('.site-header').toggleClass('open');
  });

  $('.close_menu').on('click', function (e) {
    e.preventDefault();
    $('.site-header').removeClass('open');
  });


  // Scroll Top
  // -------------------------------------------------------------------------
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 90) {
      $('.site-header').addClass('stick-header');
    } else {
      $('.site-header').removeClass('stick-header');
    }
  });


  // Maskedinput
  // -------------------------------------------------------------------------
  if ($('input[type="tel"]').length > 0) {
    $('input[type="tel"]').mask('(99)99999-999?9').focusout(function(event) {
      var target, phone, element;

      target  = (event.currentTarget) ? event.currentTarget : event.srcElement;
      phone   = target.value.replace(/\D/g, '');
      element = $(target);
      element.unmask();

      if( phone.length > 10) {
        element.mask("(99)99999-999?9");
      } else {
        element.mask("(99)99999-999?9");
      }
    });
  }


  // Animation
  // -------------------------------------------------------------------------
  ScrollReveal().reveal('.animateTop', { 
    delay: 500,
    duration: 600,
    distance: '50px',
    origin: 'bottom',
    opacity: 0,
    interval: 100
  });

  ScrollReveal().reveal('.animateDown', { 
    delay: 500,
    duration: 600,
    distance: '50px',
    origin: 'top',
    opacity: 0,
    interval: 100
  });


  // Banner Home
  // ----------------------------------------------------------------------------
  if ($('#banner_hero').length > 0) {
    $('#banner_hero').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      center: true,
      items: 4,
      smartSpeed: 400,
      autoplay: true,
      autoplayTimeout: 7000,
      autoplayHoverPause: true,
      responsive: {
        0: {
           items: 2,
         },
         768: {
           items: 3,
         },
         991: {
           items: 4,
         }
        }
    });
  }

  


  // Diferenciais
  // -------------------------------------------------------------------------
  // if ( $('#carousel_logos').length > 0 ) {
  //   $('#carousel_logos').owlCarousel({
  //     loop: false,
  //     margin: 20,
  //     nav: false,
  //     dots: true,
  //     smartSpeed: 350,
  //     autoplay: false,
  //     autoplayTimeout: false,
  //     responsive: {
  //       0: {
  //         items: 2,
  //       },
  //       768: {
  //         items: 3,
  //       },
  //       991: {
  //         items: 4,
  //       },
  //       1000: {
  //         items: 5,
  //       }
  //     }
  //   });
  // }

})(jQuery);

document.body.addEventListener('touchstart', function () {}, false);
