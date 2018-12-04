function showISBN() {
	document.getElementById("isbn").style.display = 'block';
}

function noShowISBN() {
	document.getElementById("isbn").style.display = 'none';
}

$(document).on("click", "#submitForm", function(e) {
  e.preventDefault();
 
  var formData = $("#listingForm").serializeArray();

  $.ajax({
    type: 'POST',
    url: '/fipro/static/php/addlisting.php',
    data: {formData},
    success: function() {
      alert('successfully submitted a listing!');
      document.getElementById("listingForm").reset();
    },
    error: function (err) {
      console.log(err);
    },
  })
})