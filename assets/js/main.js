'use strict';

const hasJs = () => {
	document.querySelector('html').classList.add('has-js');
};
hasJs();

const showElement = (element) => {
	element.classList.remove('visuallyhidden');
};

const hideElement = (element) => {
	element.classList.add('visuallyhidden');
};

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

function doFilter() {
	var dataSource = document.querySelector('.' + this.dataset.dataSource);
	var dataRows = Array.from(dataSource.querySelector('tbody').querySelectorAll('tr'));
	var selectedOption = this.options[this.selectedIndex];
	var filterBy = selectedOption.dataset.filterBy;
	var filterValue = selectedOption.value;

	// Loop through the table rows
	dataRows.forEach(function(row) {
		showElement(row);
		var dataCell = row.querySelector('[headers="' + filterBy + '"]');
		if (dataCell) {
			var cellValue = dataCell.textContent;
			if (cellValue !== filterValue) hideElement(row);
		}
	});

}
var filter = document.querySelector('.js-filter');
if (filter) filter.addEventListener('change', doFilter);

function liveSearch() {
	var dataSource = document.querySelector('.' + this.dataset.dataSource);
	var dataRows = Array.from(dataSource.querySelector('tbody').querySelectorAll('tr'));
	var searchOn = this.dataset.searchOn;
	var inputValue = this.value;
	dataRows.forEach(function(row) {
		if (inputValue) {
			showElement(row);
			var dataCell = row.querySelector('[headers="' + searchOn + '"]');
			var cellValue = dataCell.textContent;
			var inputValueRegex = new RegExp(inputValue, 'gi');
			dataCell.innerHTML = dataCell.textContent;
			if (dataCell) {
				if (cellValue.match(inputValueRegex)) {
					showElement(row);
				}
				else {
					hideElement(row);
				}
			}
		} else {
			showElement(row);
		}
	});
}
var liveSearchElement = document.querySelector('.js-live-search');
if (liveSearchElement) liveSearchElement.addEventListener('keyup', liveSearch);

function stickyTableHeader() {
	const table = document.querySelector('.js-sticky-header');
	if (!table) return;
	const header = table.querySelector('thead');
	const tablePositionY = table.offsetTop;
	const stickyClass = 'is-sticky';

	const checkScroll = () => {
		const pageTop = window.pageYOffset;
		console.log(tablePositionY);
		console.log(pageTop);
		if (pageTop >= tablePositionY) header.classList.add(stickyClass);
		else header.classList.remove(stickyClass);
	};
	window.addEventListener('scroll', checkScroll);

	// const elementTop = element.offsetTop;
	// const checkScroll = () => {
	// 	const scrollTop = window.pageYOffset;
	// 	console.log(`elementTop: ${elementTop}`);
	// 	console.log(`scrollTop: ${scrollTop}`);
	// 	if (scrollTop >= elementTop) {
	// 		element.classList.add('is-sticky');
	// 	} else {
	// 		element.classList.remove('is-sticky');
	// 	}
	// };
	// window.addEventListener('scroll', checkScroll);
};
stickyTableHeader();
