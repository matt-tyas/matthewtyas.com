/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'IcoMoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-search' : '&#x260c;',
			'icon-untitled' : '&#xe07d;',
			'icon-untitled-2' : '&#xe07e;',
			'icon-untitled-3' : '&#xe07f;',
			'icon-untitled-4' : '&#xe080;',
			'icon-untitled-5' : '&#xe081;',
			'icon-untitled-6' : '&#xe082;',
			'icon-untitled-7' : '&#xe083;',
			'icon-untitled-8' : '&#xe084;',
			'icon-untitled-9' : '&#x260f;',
			'icon-untitled-10' : '&#xe085;',
			'icon-untitled-11' : '&#x2605;',
			'icon-untitled-12' : '&#x272d;',
			'icon-untitled-13' : '&#x261e;',
			'icon-untitled-14' : '&#x2603;',
			'icon-untitled-15' : '&#x260e;',
			'icon-untitled-16' : '&#x270d;',
			'icon-untitled-17' : '&#x270e;',
			'icon-untitled-18' : '&#x25ba;',
			'icon-untitled-19' : '&#xe000;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^s'"]+/);
		if (c) {
			addIcon(el, icons[c[0]]);
		}
	}
};