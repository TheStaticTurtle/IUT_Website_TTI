
function scrollto(argument) {
	computerScrolling=true
	setTimeout(function() { 
		$(function() { 
			$([document.documentElement, document.body]).animate({
				scrollTop: $("#"+argument).offset().top
			}, 1000, function() {
				computerScrolling=false
			});
		});
	}, 50);
}

window.addEventListener('scroll', function() {
	var mid = document.getElementsByClassName("background-image")[0];
	var bg1_off = 1080/3*1.5;
	var bg2_off = bg1_off+1080/3*2;
	if (document.body.scrollTop > bg1_off || document.documentElement.scrollTop > bg1_off) {
		$(".background-image img.bg1").removeClass("background-image-transparent");
		$(".background-image img.bg2").addClass("background-image-transparent");
		$(".background-image img.bg3").addClass("background-image-transparent");
	}
	if (document.body.scrollTop > bg2_off || document.documentElement.scrollTop > bg2_off) {
		$(".background-image img.bg1").addClass("background-image-transparent");
		$(".background-image img.bg2").removeClass("background-image-transparent");
		$(".background-image img.bg3").addClass("background-image-transparent");
	}
	if(document.body.scrollTop < bg1_off) {
		$(".background-image img.bg1").addClass("background-image-transparent");
		$(".background-image img.bg2").addClass("background-image-transparent");
		$(".background-image img.bg3").removeClass("background-image-transparent");
	}   
});