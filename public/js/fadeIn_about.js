$(document).ready(function() {
	$('#aboutMain').delay(delayValue * 2).fadeIn();
	tripleRotater();
});

function tripleRotater() {
	imgsSets = {
		1 : $("#triple1").attr('alt').split(","),
		2 : $("#triple2").attr('alt').split(","),
		3 : $("#triple3").attr('alt').split(","),
	};

	var currentSet = 1;
	var currentIndex1 = 0;
	var currentIndex2 = 0;
	var currentIndex3 = 0;

	var pathPrefix = "img/about_slides/";

	var tripleTimer = setInterval(function() {

		if (currentSet == 1) { 
			$("#triple" + currentSet).hide();
			currentIndex1 = (currentIndex1 >= imgsSets[currentSet].length - 1) ? 0 : currentIndex1 + 1;
			$("#triple" + currentSet).attr("src", pathPrefix + imgsSets[currentSet][currentIndex1]);
			$("#triple" + currentSet).fadeIn();
		}
		if (currentSet == 2) { 
			$("#triple" + currentSet).hide();
			currentIndex2 = (currentIndex2 >= imgsSets[currentSet].length - 1) ? 0 : currentIndex2 + 1;
			$("#triple" + currentSet).attr("src", pathPrefix + imgsSets[currentSet][currentIndex2]);
			$("#triple" + currentSet).fadeIn();
		}
		if (currentSet == 3) { 
			$("#triple" + currentSet).hide();
			currentIndex3 = (currentIndex3 >= imgsSets[currentSet].length - 1) ? 0 : currentIndex3 + 1;
			$("#triple" + currentSet).attr("src", pathPrefix + imgsSets[currentSet][currentIndex3]);
			$("#triple" + currentSet).fadeIn();
		}

		currentSet = (currentSet >= 3) ? 1 : currentSet + 1;
	}, 3000);
}
