<?
session_start();
include_once "./classes/cart.php";

if ($_POST['productId'] != "") {
    $productId = $_POST['productId'];

    // Get cart from session
    $cart = unserialize($_SESSION['cart']);

    // delete cart from session
    $cart->removeProduct($productId);

    // Get updated total items quantity
    $totalQuantity = $cart->getTotalQuantity();

    // Save updated cart in session
    $_SESSION['cart'] = serialize($cart);

    // Return data in JSON format
    $response = array(
        'status' => 1,
        'cart' => $cart,
        'totalQuantity' => $totalQuantity
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}
?> 










?>