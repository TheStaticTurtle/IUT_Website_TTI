
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
	var bg1_off = 1080*0.60;
	var bg2_off = 1080*1.2	;
	if (document.body.scrollTop > bg1_off || document.documentElement.scrollTop > bg1_off) {
		if($( "body" ).hasClass( "background-image-auto" )) {

			$("body").addClass("bg1_acceuil_image");
			$("body").removeClass("bg2_acceuil_image");
			$("body").removeClass("bg3_acceuil_image");
		}
	}
	if (document.body.scrollTop > bg2_off || document.documentElement.scrollTop > bg2_off) {
		if($( "body" ).hasClass( "background-image-auto" )) {
			$("body").removeClass("bg1_acceuil_image");
			$("body").addClass("bg2_acceuil_image");
			$("body").removeClass("bg3_acceuil_image");
		}
	}
	if(document.body.scrollTop < bg1_off) {
		if($( "body" ).hasClass( "background-image-auto" )) {
			$("body").removeClass("b1g_acceuil_image");
			$("body").removeClass("bg2_acceuil_image");
			$("body").addClass("bg3_acceuil_image");
		}
	}   
});