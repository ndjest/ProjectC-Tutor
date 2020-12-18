$(window).scroll(function(){
	var sticky = $('#subnav'),
		scroll = $(window).scrollTop();

		console.log(scroll);

	if (scroll >= 637) sticky.addClass('fixed');

	else sticky.removeClass('fixed');
});