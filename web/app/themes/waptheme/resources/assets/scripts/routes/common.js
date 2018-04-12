export default {
  init() {
    // JavaScript to be fired on all pages

    let $navPrimary = $('.nav-primary')
    // let $banner = $('.banner')
    let $window = $(window)

    $window.scroll(function() {
      if ($window.scrollTop() >= $navPrimary.outerHeight()) {
        $navPrimary.addClass('fixed')
      } else {
        $navPrimary.removeClass('fixed')
      }

      $('.panel-image').each(function() {
        if ($(this).css('background-attachment') === 'fixed') {
          let test = $(window).scrollTop() - $(this).offset().top
          $(this).css('background-position-y', -test / 50)
        }
      })
    })

    $('.navbar-toggler').click(function() {
      if ($(this).hasClass('collapsed')) {
        $navPrimary.addClass('menu-visible')
      } else {
        $navPrimary.removeClass('menu-visible')
      }
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
