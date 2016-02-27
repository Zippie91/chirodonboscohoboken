$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active');
    $('.span-offcanvas').toggleClass('glyphicon-chevron-left');
    $('.span-offcanvas').toggleClass('glyphicon-chevron-right');
  });
});
