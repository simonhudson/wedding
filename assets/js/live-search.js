'use strict';

function liveSearch() {

	var namespace = 'js-live-search';
	var liveData = [];
	const searchInput = document.querySelector('.' + namespace + '__input');
	const suggestionsWrap = document.querySelector('.' + namespace + '__suggestions');

	fetch('data/guests.php')
	    .then(blob => blob.json())
	    .then(data => liveData.push(...data));

	function findMatches(wordToMatch, liveData) {
	    return liveData.filter(guest => {
			if (guest.rsvp === '1') return; // Only show guests who have not RSVP'd
	        var regex = new RegExp(wordToMatch, 'gi');
	        return guest.first_name.match(regex) || guest.last_name.match(regex);
	    });
	}

	function populateInput(suggestion) {
		searchInput.value = suggestion.textContent.trim();
		suggestionsWrap.innerHTML = '';
	}

	function displayMatches() {
	    const matchArray = findMatches(this.value, liveData);
	    const html = matchArray.map(guest => {
	        const regex = new RegExp(this.value, 'gi');
			const firstName = guest.first_name;
	        const lastName = guest.last_name;
			const id = guest.guest_id;
	        return `
	            <li>
	                <a class="${namespace}__suggestion" data-guest-id="${id}" href="#">${firstName} ${lastName}</a>
	            </li>
	        `;
	    }).join('');
	    suggestionsWrap.innerHTML = html;

		const suggestions = Array.from(document.querySelectorAll('.' + namespace + '__suggestion'));
		suggestions.forEach(suggestion => {
			suggestion.addEventListener('click', (e) => {
				populateInput(suggestion);
				e.preventDefault ? e.preventDefault() : (e.returnValue = false);
			});
		});

	}

	searchInput.addEventListener('change', displayMatches);
	searchInput.addEventListener('keyup', displayMatches);

}
liveSearch();
