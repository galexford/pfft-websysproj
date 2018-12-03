function showISBN() {
	document.getElementById("isbn").style.display = 'block';
}

function noShowISBN() {
	document.getElementById("isbn").style.display = 'none';
}

$(document).on("click", "#submitForm", function(e) {
  e.preventDefault();

  // var name = $("#itemName").value;
  // var type = document.querySelector('input[name = "itemType"]:checked').value;
  // var isbn = $("#isbnText").value;
  // var price = $("#priceFeild").value;
  // var desc = $("itemDescription").value;
  //{name: name, type: type, isbn: isbn, price: price, desc: desc} 
 
  var formData = $("#listingForm").serializeArray();

  $.ajax({
    type: 'POST',
    url: '/fipro/static/php/addlisting.php',
    data: {formData},
    success: function() {
      alert('successfully submitted a listing!');
    },
    error: function (err) {
      console.log(err);
    },
  })
})