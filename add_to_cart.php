<?php
session_start();

include_once "./classes/cart.php";

// Create an instance of a basket.
if (isset($_SESSION['cart']) && is_string($_SESSION['cart'])) {
    // If the serialized string of the basket exists in the session,
    // Unserialize it and create a basket object."
    $cart = unserialize($_SESSION['cart']);
    
    } else {
    // If the serialized string does not exist, we create a new basket.
    $cart = new Cart();
}

// Obtain the product data from the POST request.
if ($_POST['product_id'] != "" & $_POST['quantity']>0) {
    $productId = $_POST['product_id'];
    $productPrice = $_POST['product_price'];
    $productImage = $_POST['product_image'];
    $productName = $_POST['product_name'];
    $quantity = $_POST['quantity'];

    // Add the item to the basket.
    $cart->addToCart($productId, $quantity, $productPrice, $productName, $productImage);
    //  Obtain the total quantity of items.
    $totalQuantity = $cart->getTotalQuantity();////////////////
    // Save the total quantity of items in the session.
    $_SESSION['totalQuantity'] = $totalQuantity;


    // Serialize the basket and save it in the session
    $_SESSION['cart'] = serialize($cart);
    $response = array(
        'message' => 'Товар добавлен в корзину',
        'cart' => $cart,
        'status' => 1,
        'totalQuantity'=>$totalQuantity

    );
   
    
    // Output the data in JSON format.
    header('Content-Type: application/json; charset=utf-8');
 
    echo json_encode($response);
}
?>