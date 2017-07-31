'use strict';

const hiddenClass = 'visuallyhidden';

const hasJs = () => {
	document.querySelector('html').classList.add('has-js');
};
hasJs();

const pluraliseString = (string, number) => (number !== 1) ? `${string}s` : string;

const showElement = (element) => {
	element.classList.remove(hiddenClass);
};

const hideElement = (element) => {
	element.classList.add(hiddenClass);
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
	var feedback = {
		element: document.querySelector('.js-live-search__feedback'),
		query: document.querySelector('.js-live-search__query'),
		count: document.querySelector('.js-live-search__count'),
		pluralisation: document.querySelector('.js-live-search__pluralisation')
	};
	const updateFeedback = () => {
		let visibleRows = dataRows.filter(row => !row.classList.contains(hiddenClass)).length;
		(inputValue.length || feedback.element.classList.contains(hiddenClass))
			? feedback.element.classList.remove(hiddenClass)
			: feedback.element.classList.add(hiddenClass);
		feedback.query.textContent = inputValue;
		feedback.count.textContent = visibleRows;
		feedback.pluralisation.textContent = pluraliseString('result', visibleRows);
	};
	updateFeedback();

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
					updateFeedback();
				}
				else {
					hideElement(row);
					updateFeedback();
				}
			}
		} else {
			showElement(row);
		}
	});
}
var liveSearchElement = document.querySelector('.js-live-search');
if (liveSearchElement) liveSearchElement.addEventListener('keyup', liveSearch);
