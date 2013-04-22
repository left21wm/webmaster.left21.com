jQuery(document).ready(function($){

	// 반응형 비디오.
	$('iframe, object, embed')
			.wrap('<div class="video-container"/>')
			.wrap('<div class="video-container__inner"/>');
	
	// highlight.js용.
	$('pre').each(function(){
		var $this = $(this); 
		if($this.find('code').length == 0){
			var $inner = $('<code />', {
				html: $this.html()
			});
			$this.html($inner);
		}
	});
});