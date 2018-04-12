/* global gtag */
export default {
  init() {
    // JavaScript to be fired on all pages

    function gtag_report_conversion(url) {
      let callback = function () {
        if (typeof(url) !== 'undefined') {
          window.location = url;
        }
      };

      gtag('event', 'conversion', {
        'send_to': 'AW-809204708/CUchCMmW938Q5PftgQM',
        'event_callback': callback,
      });

      return false;
    }

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

    $('.register-btn').click(function(e) {
      e.preventDefault()
      gtag_report_conversion(e.target.href)
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
