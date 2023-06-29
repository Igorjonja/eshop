function addToCart(productId, productPrice, productImage, productName, quantity) {
  var formData = {
    product_id: productId,
    product_price: productPrice,
    product_image: productImage,
    product_name: productName,
    quantity: quantity
  };
  // console.log(formData);
  $.ajax({
    url: 'add_to_cart.php',
    type: 'POST',
    data: formData,
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8'
  })
 
  .done(function(response) {
    console.log(response)
    if (response.status == 1) {
      // Obtaining the quantity of items from the JSON response.
    var totalQuantity = 0;

    // A loop to access each 'quantity' element.
    for (var productId in response.cart.products) {
      var quantity = response.cart.products[productId].quantity;

      // Performing the necessary actions with each 'quantity'.
      console.log("Product ID:", productId);
      console.log("Quantity:", quantity);

      // Converting the string to a number
      quantity = parseInt(quantity);

      // Adding the quantity to the total quantity.
      totalQuantity += quantity;
    }


    // Setting the quantity of items in the 'total-quantity' element.
    console.log(response)
    $('#total-quantyty').text(response.totalQuantity);
    // $('#total-quantyty').text(totalQuantity);
    $('#cart-content').load(location.href+" #cart-content>*")
    } 
   
    
  })
  .fail(function(xhr, status, error) {
    console.log("XHR status:", xhr.status);
    console.log("Status:", status);
    console.log("Error:", error);
  });
}