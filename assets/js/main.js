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
		var rowValue = row.querySelector('[headers="' + filterBy + '"]').textContent;
		if (rowValue !== filterValue) hideElement(row);
	});

};
document.querySelector('.js-filter').addEventListener('change', doFilter);
