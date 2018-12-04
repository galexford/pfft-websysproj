$(document).ready(function() {
	var data = {'register':"Register", };
	$.post("static/php/listings.php", data, function(data) {
	    alert("Registered");
	});
});