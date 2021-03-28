$(document).ready(function() {
	

	// featured images rotator.
	var sindex = 1;
	var s = setInterval(function() {
		$('.featured-img').hide();
		$('.featured-img').eq(sindex).fadeIn();
		sindex++;
		if (sindex > 8) {
			sindex = 0;
		}
	}, 5000); 

});
