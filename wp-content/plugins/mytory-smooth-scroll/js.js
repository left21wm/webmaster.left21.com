jQuery(document).ready(function($){
	$('a').smoothScroll({
		offset: -100, 
		easing: 'swing',
		afterScroll: function(){
			var selector = $(this).attr('href');
			$(selector)
				.css('background-color', 'gold')
				.animate({'background-color': 'transparent'}, 2000);
		}
	});
});