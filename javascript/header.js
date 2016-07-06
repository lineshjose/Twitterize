var oldOnload = window.onload;

if(typeof oldOnload == "function") {
	window.onload = function() {
		if(oldOnload) {
			oldOnload();
		}
		showMe();
		}
} else {
	window.onload = showMe;
	
}

function showMe() {
		var logo = document.forms['myForm'].twitterize_logo_header;
		var logoLength = logo.length;
		
		for (i = 0; i <logoLength; i++) {
			if (logo[i].checked) {
				var logoPick = logo[i].value
			}
		}
		
		if (logoPick == "no") {
			document.getElementById("headerLogo").style.display = "none";
		} else {
			document.getElementById("headerLogo").style.display = "block";
		}
		
		var image = document.forms['myForm'].twitterize_background_image;
		var imageLength = image.length;
		for (i = 0; i <imageLength; i++) {
			if (image[i].checked) {
				var imagePick = image[i].value
			}
		}
		
		if (imagePick == "no") {
			document.getElementById("Background").style.display = "none";
		} else {
			document.getElementById("Background").style.display = "block";
		}

}