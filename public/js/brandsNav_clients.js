$(document).ready(function() {


});

$(window).load(function() {
  	// brands wrapper.
	brands = $('.brands_wrap');

	// return row width for a specified index
	function rowIndexWidth(i) {
		return $('.brands-row').eq(i).width();
	}

	var totWidth = 0;
	$('.brands-row > li').each(function() {
		totWidth += $(this).outerWidth(true);
	}); 

	$('.brands-row').width(parseInt(totWidth) + 80);

	// get max row width
	var maxRow_width = (rowIndexWidth(0) > rowIndexWidth(1)) ? rowIndexWidth(0) : rowIndexWidth(1);

	overflow_width = totWidth - parseInt($('.brands_wrap').outerWidth()) + 60;

	// slide left handler.
	$('.nvg_left').hover(function() {
		t = setInterval(function() {
			if (parseInt(brands.css('margin-left')) < 0) {
				brands.css('margin-left', '+=40px');
			}

		}, 50);
	}, function() {
		// reset.
		clearInterval(t);
	});
	// slide right handler.
	$('.nvg_right').hover(function() {
		t = setInterval(function() {
			if (parseInt(brands.css('margin-left')) > (overflow_width * -1)) {

				brands.css('margin-left', '-=40px');
			}

		}, 50);

	}, function() {
		// reset.
		clearInterval(t);
	});
});
