$(document).ready(function(e) {

	// Announcement Carousel
	$("#announcementBox .wrap").carouFredSel({
		responsive: true,
		height: "variable",
		width: "variable",
		items: {
			visible: 1
		},
		scroll: {
			items: 1,
			duration: 600,
			pauseOnHover: true,
			fx: "crossfade"
		},
		pagination: "#homeSlidesPage",
		auto: false,
		swipe: true,
	    mousewheel: true
	});
		
});
