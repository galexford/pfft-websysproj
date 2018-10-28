function validate(formObj){
	if (formObj.currentpassword == formObj.newpassword1){
		alert("Cannot reuse an old password.");
		return false;
	}
	if (formObj.newpassword.length < 5){
		alert("New Password must be at least 5 characters long");
		return false;
	}
	if (formObj.newpassword1 != formObj.newpassword2){
		alert("New passwords do not match.");
		return false;
	}
	alert("Password Changed Successfully");
	return true;
}