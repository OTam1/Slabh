$(document).ready(function() {
	projsCount = $('#projectsMain').children().length;
	itemWidth = $('.projectItem ').outerWidth();
	fixedWidth = $('#mainContent').outerWidth();
	totalWidth = projsCount * itemWidth;
	marginLimit = totalWidth - fixedWidth;
	currentMargin = function() {
		return $('#projectsMain').css('margin-left');
	};
	$('#projectsMain').width(totalWidth * 1.3);

	// navigate items right
	$('.proJnav-right').hover(function() {
		p = setInterval(function() {
			m = parseInt($('#projectsMain').css('margin-left'));
			l = parseInt(marginLimit * -1) +100;
			if (m > l) {
				$('#projectsMain').css('margin-left', '-=100px');
			}
		}, 100);
	}, function() {
		clearInterval(p);
	});

	// navigate items left
	$('.proJnav-left').hover(function() {
		p = setInterval(function() {
			m = parseInt($('#projectsMain').css('margin-left')); 
			if (m < -100) {
				$('#projectsMain').css('margin-left', '+=100px');

			}
		}, 100);
	}, function() {
		clearInterval(p);
	});
});
