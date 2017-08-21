'use strict';

function liveFilter() {
	var namespace = 'js-live-filter';
	var dataSource = document.querySelector('.' + this.dataset.dataSource);
	var dataRows = Array.from(dataSource.querySelector('tbody').querySelectorAll('tr'));
	if (!dataRows) return;
	var searchOn = this.dataset.searchOn;
	var inputValue = this.value;
	var feedback = {
		element: document.querySelector('.' + namespace + '__feedback'),
		query: document.querySelector('.' + namespace + '__query'),
		count: document.querySelector('.' + namespace + '__count'),
		pluralisation: document.querySelector('.' + namespace + '__pluralisation')
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
var liveFilterElement = document.querySelector('.js-live-filter');
if (liveFilterElement) liveFilterElement.addEventListener('keyup', liveFilter);
