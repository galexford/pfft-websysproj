$(document).ready(function() {
	
	var data = {'data': "book"};
	$.post("static/php/listings.php", data, function(data) {
	    $("#bookDiv").html(data);
	});

	var data = {'data':"furniture"};
	$.post("static/php/listings.php", data, function(data) {
	    $("#furnDiv").html(data);
	});

	var data = {'data':"other"};
	$.post("static/php/listings.php", data, function(data) {
	    $("#otherDiv").html(data);
	});
});