$(document).ready(function() {
    // Button click handler "delete"
    $(document).on('click', '.delete-btn', function() {
        var productId = $(this).data('delete-id');
        console.log(productId);
        
        $.ajax({
            url: 'remove_from_cart.php',
            type: 'POST',
            data: {productId},
            
          })


          .done(function(response) {
            console.log(response)

          })
          .fail(function(xhr, status, error) {
            console.log("XHR status:", xhr.status);
            console.log("Status:", status);
            console.log("Error:", error);
          });














        // $.ajax({
        //     url: 'remove_from_cart.php',
        //     type: 'POST',
        //     data: { productId: productId },
        //     dataType: 'json',
        //     success: function(response) {
        //         if (response.status == 1) {
        //             // Обновляем корзину и общее количество товаров
        //             updateCartContent(response.cart, response.totalQuantity);
        //         }
        //     },
        //     error: function(xhr, status, error) {
        //         console.log("XHR status:", xhr.status);
        //         console.log("Status:", status);
        //         console.log("Error:", error);
        //     }
        // });
    });

 
});