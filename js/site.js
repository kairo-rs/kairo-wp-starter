jQuery(document).ready(function($){
	// superfish

	var breakpoint = 600;
	var sf = $('ul.nav-menu');

	if($(document).width() >= breakpoint) {
			sf.superfish({
			delay:200,
			speed: 'fast'
		});
	}

	$(window).resize(function(){
		if($(document).width() >= breakpoint & !sf.hasClass('sf-js-enabled')) {
				sf.superfish({
				delay:200,
				speed: 'fast'
			});
		} else if($(document).width() < breakpoint) {
			sf.superfish('destroy');
		}
	});

	// search toggle
	var icon = $('.search-toggle');
	icon.click(function(){
		$('#search-container').slideToggle('slow', function(){
			icon.toggleClass('active');
		});
	});
	
});