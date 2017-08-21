'use strict';

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
