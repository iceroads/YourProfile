$(function() {
	$("#searchsubmit").click(function(e) {
		var search = $("#searchform");
		if( $("#searchform").is(":visible") ) {
			$("#searchform").submit();
		} else {
			search.toggle();
		}
	});

	$(document).mouseup(function (e) {
	    var container = $("#searchform");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.hide();
	    }
	});
});