/* global Modernizr */
export default {
  init() {
    // JavaScript to be fired on all pages
    let $navPrimary = $('.nav-primary')
    // let $banner = $('.banner')
    let $window = $(window)

    $window.scroll(function() {
      // if ($window.scrollTop() >= $banner.innerHeight() - $navPrimary.outerHeight()) {
      //   $navPrimary.addClass('fixed')
      // } else {
      //   $navPrimary.removeClass('fixed')
      // }

      if ($window.scrollTop() >= $navPrimary.outerHeight()) {
        $navPrimary.addClass('fixed')
      } else {
        $navPrimary.removeClass('fixed')
      }

      $('.panel-image').each(function() {
        let test = $(window).scrollTop() - $(this).offset().top
        $(this).css('background-position-y', -test / 50)
      })
    })

    if (Modernizr.testAllProps('backgroundClip')) {
      console.log('background-clip');
    }else{
      console.log('not backgroundclip');
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
