const selectElement = function (element) {
	return document.querySelector(element);
};

let menuTogglres = selectElement('.menu-toggle');
let header = selectElement('header');

menuTogglres.addEventListener('click', function () {
	header.classList.toggle('open');
});

/**
 * checking the window in desktop mode then remove the class of mobile version
 */
if (navigator.userAgent.match(/Mozilla/)) {
	if (header.classList.contains('open')) {
		header.classList.remove('open');
	} else {
		header.classList.remove('open');
	}
}
