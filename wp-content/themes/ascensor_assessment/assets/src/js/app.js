// import bootstrap from 'bootstrap';
import $ from 'jquery';

// NAVBAR-FADE
let lastScroll = 0;
$(window).on('scroll', function () {
  let st = $(this).scrollTop();

  if (st > lastScroll) {
    $('.navbar').fadeOut('slow');
  } else if (st < lastScroll) {
    $('.navbar').fadeIn('slow');
  } else {
    $('.navbar').fadeIn('slow');
  }

  lastScroll = st;
});
