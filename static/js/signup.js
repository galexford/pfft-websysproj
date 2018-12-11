$(document).on("click", "#submitUser", function(e) {
  e.preventDefault();
 
  //var register = $("#submitUser").serialize();

  var fName = $("#fname").val();
  var lName = $("#lname").val();
  var username = $("#username").val();
  var dob = $("#dob").val();
  var pass = $("#pass").val();
  var passconfirm = $("#passconfirm").val();

  console.log(fName);
  console.log(lName);
  console.log(username);
  console.log(dob);
  console.log(pass);
  console.log(passconfirm);

  $.ajax({
    type: 'POST',
    url: '/fipro/static/php/signup.php',
    data: {fname: fName, lname: lName, username: username, dob: dob, pass: pass, passconfirm: passconfirm},
    success: function() {
      alert('Successfully registered!');
      document.getElementById("userForm").reset();
    },
    error: function (err) {
      console.log(err);
    },
  })
})