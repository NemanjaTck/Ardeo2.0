$(document).ready(function () {
  stickyNavigation();
  sidebarNavigation();
  scrollToElement();
  initializeSlideshow();

  function stickyNavigation() {
    $(document).on('scroll', function () {
      if ($(window).scrollTop() > 0) {
        $('.js-navigation').addClass('hidden');
        $('.js-navigationFixed').removeClass('hidden');
        $('body').addClass('fixed');
      } else {
        $('.js-navigation').removeClass('hidden');
        $('.js-navigationFixed').addClass('hidden');
        $('body').removeClass('fixed');
      }
    });

    if ($(window).scrollTop() > 0) {
      $('.js-navigation').addClass('hidden');
      $('body').addClass('fixed');
      $('.js-navigationFixed').removeClass('hidden');
    } else {
      $('.js-navigation').removeClass('hidden');
      $('.js-navigationFixed').addClass('hidden');
      $('body').removeClass('fixed');
    }
  }

  function sidebarNavigation() {
    $('.ui.sidebar')
      .sidebar({
        closable: false
      })
      .sidebar('attach events', '.js-navigationToggle', 'toggle');

    $('.js-navigationToggle').on('click', function () {
      $(this).toggleClass('active');
    })
  }

  function scrollToElement () {
    $(".js-scrollTo").on('click', function() {
      $this = $(this);
      $('html, body').animate({
          scrollTop: $($this.attr('href')).offset().top - 62
      }, 600);
  });
  }

  function initializeSlideshow () {
    $('.js-slideshow').slick({
      arrows: true,
      dots: false,
      pauseOnHover: false,
      pauseOnDotsHover: true,
      speed: 600,
      prevArrow: '<span class="slick-prev slick-arrow"><i class="arrow left icon"></i></span>',
      nextArrow: '<span class="slick-next slick-arrow"><i class="arrow right icon"></i></span>',
    });
  }

  var swiper = new Swiper('.skills__slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoHeight: true,
    pagination: {
      el: '.skills__slider__pagination',
      clickable: true,
    }
  });
});
