var swiper = new Swiper('.slider1', {
	grabCursor: true,
	loop: true,
	spaceBetween: 30,
	speed: 1000,
	effect: 'flip',
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
		clickable: true,
	},
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
});

// var swiper = new Swiper('.slider2', {
// 	effect: 'coverflow',
// 	grabCursor: true,
// 	centeredSlides: true,
// 	slidesPerView: 'auto',
// 	loop: true,
// 	coverflowEffect: {
// 		rotate: 0,
// 		stretch: 0,
// 		depth: 100,
// 		modifier: 2,
// 		slideShadows: true,
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	},
// });
// var swiper = new Swiper('.slider3', {
// 	grabCursor: true,
// 	loop: true,
// 	pagination: {
// 		el: '.swiper-pagination',
// 		clickable: true,
// 	},
// 	autoplay: {
// 		delay: 2500,
// 		disableOnInteraction: false,
// 	},
// });

// console.clear();
