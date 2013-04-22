jQuery(document).ready(function($){
	$('.js-share-twitter').click(function(e){
		e.preventDefault();
		window.twttr = window.twttr || {};
		var D = 550, A = 450, C = screen.height, B = screen.width, H = Math
				.round((B / 2) - (D / 2)), G = 0, F = document, E;
		if (C > A) {
			G = Math.round((C / 2) - (A / 2))
		}
		window.twttr.shareWin = window.open('http://twitter.com/share', '', 'left=' + H
				+ ',top=' + G + ',width=' + D + ',height=' + A
				+ ',personalbar=0,toolbar=0,scrollbars=1,resizable=1');
		E = F.createElement('script');
		E.src = 'http://platform.twitter.com/bookmarklets/share.js?v=1';
		F.getElementsByTagName('head')[0].appendChild(E);
	});

	$('.js-share-facebook').click(function(e){
		e.preventDefault();
		var d = document, f = 'http://www.facebook.com/share', l = d.location, e = encodeURIComponent, p = '.php?src=bm&v=4&i=1308053343&u='
		+ e(l.href) + '&t=' + e(d.title);
		try {
			if (!/^(.*\.)?facebook\.[^.]*$/.test(l.host))
				throw (0);
			share_internal_bookmarklet(p)
		} catch (z) {
			a = function() {
				if (!window.open(f + 'r' + p, 'sharer',
						'toolbar=0,status=0,resizable=1,width=626,height=436'))
					l.href = f + p
			};
			if (/Firefox/.test(navigator.userAgent))
				setTimeout(a, 0);
			else {
				a()
			}
		}
	});

	$('.js-share-google-plus').click(function(e){
		e.preventDefault();
		window.open('https://plus.google.com/share?ur\l='
		+ encodeURIComponent(location), 'Share to Google+',
		'width=600,height=460,menubar=no,location=no,status=no');
	});
});