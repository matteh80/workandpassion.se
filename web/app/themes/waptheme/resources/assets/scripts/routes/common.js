export default {
  init() {
    // JavaScript to be fired on all pages
    let $navPrimary = $('.nav-primary')
    let $banner = $('.banner')
    let $window = $(window)

    $window.scroll(function() {
      if ($window.scrollTop() >= $banner.innerHeight() - $navPrimary.height()) {
        $navPrimary.addClass('fixed')
      } else {
        $navPrimary.removeClass('fixed')
      }
    })

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
