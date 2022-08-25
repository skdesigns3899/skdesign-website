window.sr = ScrollReveal();

sr.reveal('.animate-left', {
	origin: 'left',
	duration: 1000,
	distance: '25rem',
	delay: 300,
});

sr.reveal('.animate-right', {
	origin: 'right',
	duration: 1000,
	distance: '25rem',
	delay: 600,
});

sr.reveal('.animate-top', {
	origin: 'top',
	duration: 1000,
	distance: '25rem',
	delay: 600,
});

sr.reveal('.animate-bottom', {
	origin: 'bottom',
	duration: 1000,
	distance: '25rem',
	delay: 600,
});
// console.clear();

/**
 * this is the lightbox library changes
 */

lightbox.option({
	resizeDuration: 200,
	wrapAround: true,
	disableScrolling: true,
	fadeDuration: 200,
	imageFadeDuration: 250,
	positionFromTop: 150,
});

/**
 * this is the mixitup
 * changes
 */

$(function () {
	var filterList = {
		init: function () {
			$('#portfoliolist').mixItUp({
				selectors: {
					target: '.portfolio',
					filter: '.filter',
				},
				load: {
					filter: '.pre-wedding',
				},
			});
		},
	};

	// Run the show!
	filterList.init();
});

/**
 * Active Class
 */

let navlist = document.querySelector('#navlist');
let navItem = navlist.querySelectorAll('.nav-item');
// let sections = document.querySelectorAll('section');

function mouseEnter(item) {
	if (item.id == 'hero') {
		navItem.forEach((item) => {
			if (item.classList.contains('active')) {
				item.classList.remove('active');
			}
			if (item.innerText == 'HOME') {
				item.classList.add('active');
			}
		});
	}
	if (item.id == 'our-services') {
		// console.log('our-services');
		navItem.forEach((item) => {
			if (item.classList.contains('active')) {
				item.classList.remove('active');
			}
			if (item.innerText == 'SERVICE') {
				item.classList.add('active');
			}
		});
	}
	if (item.id == 'portfolio') {
		// console.log('portfolio');
		navItem.forEach((item) => {
			if (item.classList.contains('active')) {
				item.classList.remove('active');
			}
			if (item.innerText == 'PORTFOLIO') {
				item.classList.add('active');
			}
		});
	}
	if (item.id == 'contact-us') {
		// console.log('contact-us');
		navItem.forEach((item) => {
			if (item.classList.contains('active')) {
				item.classList.remove('active');
			}
			if (item.innerText == 'CONTACT') {
				item.classList.add('active');
			}
		});
	}
	if (item.id == 'about-us') {
		navItem.forEach((item) => {
			if (item.classList.contains('active')) {
				item.classList.remove('active');
			}
			if (item.innerText == 'ABOUT') {
				item.classList.add('active');
			}
		});
	}
}
