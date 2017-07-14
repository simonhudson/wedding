'use strict';

function showElement(element) {
	element.classList.remove('sr-only');
}

function hideElement(element) {
	element.classList.add('sr-only');
}

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
			var cellValue = rowFilter.textContent;
			if (cellValue !== filterValue) hideElement(row);
		}
	});

};
document.querySelector('.js-filter').addEventListener('change', doFilter);

function liveSearch() {
	var dataSource = document.querySelector('.' + this.dataset.dataSource);
	var dataRows = Array.from(dataSource.querySelector('tbody').querySelectorAll('tr'));
	var searchOn = this.dataset.searchOn;
	var inputValue = this.value;
	dataRows.forEach(function(row) {
		if (inputValue) {
			showElement(row);
			var dataCell = row.querySelector('[headers="' + searchOn + '"]');
			if (dataCell) {
				var cellValue = dataCell.textContent;
				if (cellValue.toLowerCase().indexOf(inputValue.toLowerCase()) < 0) hideElement(row);
				else showElement(row);
			}
		} else {
			showElement(row);
		}
	});
}
document.querySelector('.js-live-search').addEventListener('keyup', liveSearch);
