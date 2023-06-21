function CheckActiveNav(){
	

	if(window.location.href.indexOf("dashboard") > -1){
		$('div[attr-nav="dashboard"]').addClass("active");
	}

	if(window.location.href.indexOf("article-extraction-single") > -1){
		$('div[attr-nav="single"]').addClass("active");
	}

    if(window.location.href.indexOf("article-extraction-multiple") > -1){
		$('div[attr-nav="multiple"]').addClass("active");
	}

    if(window.location.href.indexOf("article-lists-migrated") > -1){
		$('div[attr-nav="migrated"]').addClass("active");
	}

	if(window.location.href.indexOf("article-lists-extracted") > -1){
		$('div[attr-nav="extracted"]').addClass("active");
	}

    if(window.location.href.indexOf("logs") > -1){
		$('div[attr-nav="logs"]').addClass("active");
	}


	if(window.location.href.indexOf("article-view") > -1){
		$('div[attr-nav="extracted"]').addClass("active");
		$('.btn-go-back').removeClass("d-none");
	}

}


function GetParameter(name) {
	name = name.replace(/[\[\]]/g, "\\$&"); // Escape special characters
	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
	var results = regex.exec(window.location.href);
	if (!results) return null;
	if (!results[2]) return '';

	return decodeURIComponent(results[2].replace(/\+/g, " "));
}