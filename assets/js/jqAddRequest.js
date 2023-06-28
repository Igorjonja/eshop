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
      // Получение количества товаров из JSON-ответа
    var totalQuantity = 0;

    // Цикл для обращения к каждому элементу quantity
    for (var productId in response.cart.products) {
      var quantity = response.cart.products[productId].quantity;

      // Выполнение необходимых действий с каждым quantity
      console.log("Product ID:", productId);
      console.log("Quantity:", quantity);

      // Преобразование строки в число, если необходимо
      quantity = parseInt(quantity);

      // Добавление quantity к общему количеству
      totalQuantity += quantity;
    }


    // Установка количества товаров в элемент "total-quantyty"
    console.log(response)
    $('#total-quantyty').text(response.totalQuantity);
    // $('#total-quantyty').text(totalQuantity);
    $('#cart-content').load(location.href+" #cart-content>*")
    } 
    // Выполнение дополнительных действий, если необходимо
    
  })
  .fail(function(xhr, status, error) {
    console.log("XHR status:", xhr.status);
    console.log("Status:", status);
    console.log("Error:", error);
  });
}