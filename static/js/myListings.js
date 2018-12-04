$(document).ready(function() {
	
	var data = {'data': "book"};
	$.post("views/mylistings.php", data, function(data) {
	    $("#myBookDiv").html(data);
	});

	var data = {'data':"furniture"};
	$.post("views/mylistings.php", data, function(data) {
	    $("#myFurnDiv").html(data);
	});

	var data = {'data':"other"};
	$.post("views/mylistings.php", data, function(data) {
	    $("#myOtherDiv").html(data);
	});
});