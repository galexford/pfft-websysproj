alert("hi");
function signup2(){
	var user = document.getElementById("uname").innerHTML;
	alert(user);
	var sl = user.slice(-3);
	alert(user);
	alert(sl);
	if (user.slice(-3)!= ".edu"){
		alert("Email must be .edu, not" + user.slice(-3));
	}
}
