const slider = $(".slider-item");

slider.on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaY < 0) {
    $('.slider').slick('slickPrev');
  } else {
    $('.slider').slick('slickNext');
  }
}));