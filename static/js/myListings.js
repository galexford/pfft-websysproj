$(document).ready(function() {
	
	var data = {'data': "book"};
	$.post("static/php/mylistings.php", data, function(data) {
	    $("#myBookDiv").html(data);
	});

	var data = {'data':"furniture"};
	$.post("static/php/mylistings.php", data, function(data) {
	    $("#myFurnDiv").html(data);
	});

	var data = {'data':"other"};
	$.post("static/php/mylistings.php", data, function(data) {
	    $("#myOtherDiv").html(data);
	});
});