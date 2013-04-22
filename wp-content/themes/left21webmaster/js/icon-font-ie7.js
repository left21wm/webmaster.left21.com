/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'left21wm\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-feed' : '&#x72;&#x73;&#x73;',
			'icon-twitter' : '&#x74;&#x77;&#x69;&#x74;&#x74;&#x65;&#x72;',
			'icon-facebook' : '&#x66;&#x61;&#x63;&#x65;&#x62;&#x6f;&#x6f;&#x6b;',
			'icon-google-plus' : '&#x67;&#x6f;&#x6f;&#x67;&#x6c;&#x65;&#x70;&#x6c;&#x75;&#x73;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};