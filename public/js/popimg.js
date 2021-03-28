/*
 * ----------------------------
 * Author: accorpa.muhamed 2015
 * ----------------------------
 *
 */
$(window).load(function() {
	$(".projectItem").click(function(e) {
		e.stopPropagation();
		src = e.target.previousElementSibling.alt.split(',');
		// current slide index
		slideIndex = 1;
		// imgpop width
		viewbox_width = $('#imgPOP').width(); 
		// total_width
		// create fragment
		var frag = document.createDocumentFragment();
		// generate container
		var container = document.createElement("div");
		container.setAttribute("class", "overflow_container");
		container.style.width = parseInt(viewbox_width) * src.length + "px";
		// append images
		var fragment = document.createDocumentFragment();		for (var x = 0; x < src.length; x++) {			var img = document.createElement("img");
			img.style.width = parseInt(viewbox_width) + "px"; 			img.src = "img/full_preview/" + src[x];
			fragment.appendChild(img);
		}
		container.appendChild(fragment);		container.firstChild.setAttribute("id", "imgHandle");
		frag.appendChild(container);
		// right capture area
		var controlz = document.createElement("span");
		controlz.setAttribute("class", "fullImg_ctrl ar_right");
		frag.appendChild(controlz);
		controlz.addEventListener("mousedown", function() {
			var slideDist = parseInt(viewbox_width) * slideIndex;
			slideIndex = (slideIndex < src.length - 1) ? slideIndex + 1 : slideIndex;
			if (slideIndex > src.length - 1) {
				return;
			};
			$(".overflow_container").animate({
				"left" : slideDist * -1
			}, 300);
		});
		// left capture area
		var controlz = document.createElement("span");
		controlz.setAttribute("class", "fullImg_ctrl ar_left");
		frag.appendChild(controlz);
		controlz.addEventListener("mousedown", function() {
			slideIndex = (slideIndex > 0) ? slideIndex - 1 : slideIndex;
			var slideDist = parseInt(viewbox_width) * (slideIndex);
			$(".overflow_container").animate({
				"left" : slideDist * -1
			}, 300);
			slideIndex = slideIndex == 0 ? 1 : slideIndex;
		});
		// close
		var closeit = document.createElement("span");
		closeit.setAttribute("id", "closeFullView");
		frag.appendChild(closeit);
		closeit.addEventListener("click", function() {
			$('#imgPOP').slideUp();
		});
		var pop = document.getElementById('imgPOP');
		pop.innerHTML = "";
		pop.appendChild(frag);
		$('#imgPOP').slideDown();
	});
});
