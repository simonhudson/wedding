'use strict';

const hiddenClass = 'visuallyhidden';

const hasJs = () => {
	document.querySelector('html').classList.add('has-js');
};
hasJs();

const pluraliseString = (string, number, needsE = false) => (number !== 1) ? `${string}${needsE ? 'e' : ''}s` : string;

const showElement = (element) => {
	element.classList.remove(hiddenClass);
};

const hideElement = (element) => {
	element.classList.add(hiddenClass);
};
