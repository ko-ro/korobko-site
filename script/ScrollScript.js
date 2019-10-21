var options = {
    offset: 400
  }
var header = new Headhesive('.navbar-collapse', options);

$('.nav-link').bind("click", function(e) {
  var anchor = $(this);
  $('html, body').stop().animate({
    scrollTop: $(anchor.attr('href')).offset().top - 96
  }, 1000);
  e.preventDefault();
});