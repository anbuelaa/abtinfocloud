$(window).load(function(){
	$('.slider')._TMS({
		preset:'diagonalFade',
		easing:'easeOutQuad',
		duration:400,
		pagination:true,
		slideshow:4000
	})
	$("#testimonials").jCarouselLite({
		btnNext: ".down",
		btnPrev: ".up",
		visible: 1,
		speed: 600,
		vertical: true,
        circular: true,
		easing: 'easeOutCirc'
	});
})
