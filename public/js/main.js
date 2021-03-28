$(document).ready(function() {

	// main navigation hide DELAY.
	delayValue = 1000;

	var t = setTimeout(function() {
		$('.main-navigation').addClass('nav_slideOut');

	}, delayValue);

	// menu to close morphing function.
	$('#navClose,.main-navigation .nav-link').hover(function() {
		var i = 0;
		$('.main-navigation').removeClass('nav_slideOut');
		$('.main-navigation').addClass('nav_slideIn');
		animateItem(ii);

	}, function() {
		$('.main-navigation').removeClass('nav_slideIn');
		$('.main-navigation').addClass('nav_slideOut');
	});

	linksCount = $('.main-navigation .nav-link').length;
	var ii = 0;

	// show nav items through a recursive animation.
	function animateItem(navlinkIndex) {
		$('.main-navigation .nav-link').eq(navlinkIndex).stop().animate({
			'opacity' : '1',
			'margin-right' : '0'
		}, {
			duration : 30,
			complete : function() {
				ii++;
				if (ii < linksCount) {
					var tt = setTimeout(function() {
						animateItem(ii);
					}, 20);
				}
			}
		});
	};

	animateItem(ii);

});

 

$(window).load(function() {
	$('#preloader').addClass('spinner-reverse');
	var t = setTimeout(function(){
	$('#mainContent').addClass('spinner'); 
	imageLoader(cImageSrc, 'stopAnimation()');
	},700);
	
	console.log('loaded');
});
