$(function() {
	$("#searchsubmit").on("click", function(e) {
		var search = $("#searchform");
		if( $("#searchform").is(":visible") && $('.search-container .form-control').val() != "" ) {
			$("#searchform").submit();
		} else {
			search.animate({width:'toggle'},350);
			$("#searchforminput").focus();
		}
	});

	$(document).mouseup(function (e) {
	    var searchfrom = $(".search-container");

	    if (!searchfrom.is(e.target)
	        && searchfrom.has(e.target).length === 0)
	    {
	    	if( $("#searchform").is(":visible") ) {	
	        	$("#searchform").animate({width:'toggle'},350);
	    	}
	    }
	});
});