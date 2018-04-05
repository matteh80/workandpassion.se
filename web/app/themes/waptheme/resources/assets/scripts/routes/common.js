export default {
  init() {
    // JavaScript to be fired on all pages
    let $navPrimary = $('.nav-primary')
    let $banner = $('.banner')
    let $window = $(window)

    $window.scroll(function() {
      if ($window.scrollTop() >= $banner.innerHeight() - $navPrimary.outerHeight()) {
        $navPrimary.addClass('fixed')
      } else {
        $navPrimary.removeClass('fixed')
      }

      $('.panel-image').each(function() {
        // console.log($(this).offset().top)
        console.log($(window).scrollTop() - $(this).offset().top)
        let test = $(window).scrollTop() - $(this).offset().top
        $(this).css('background-position-y', -test / 100)
      })
    })

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
