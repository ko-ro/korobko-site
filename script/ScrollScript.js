 $(document).ready(function(){
	$(".navbar").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
    top = $(id).offset().top;
    top -=96;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});
$(document).ready(function(){
	$(".btn-yak").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
    top = $(id).offset().top;
    top -=96;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});