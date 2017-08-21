'use strict';

const toggleMainNav = (e) => {
	e.preventDefault ? e.preventDefault() : (e.returnValue = false);
	var nav = document.querySelector('.js-main-nav');
	if (nav) {
		var current = nav.style.display;
		var value = !current || current === 'none' ? 'block' : 'none';
		nav.style.display = value;
	}
};
var navToggle = document.querySelector('.js-main-nav__toggle');
if (navToggle) navToggle.addEventListener('click', toggleMainNav);
