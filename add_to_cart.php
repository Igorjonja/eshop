<?php
session_start();

include_once "./classes/cart.php";

// Создаем экземпляр корзины
if (isset($_SESSION['cart']) && is_string($_SESSION['cart'])) {
    // Если сериализованная строка корзины существует в сессии,
    // десериализуем ее и создаем объект корзины
    $cart = unserialize($_SESSION['cart']);
    
    } else {
    // Если сериализованная строка не существует, создаем новую корзину
    $cart = new Cart();
}

// Получаем данные о товаре из POST-запроса
if ($_POST['product_id'] != "" & $_POST['quantity']>0) {
    $productId = $_POST['product_id'];
    $productPrice = $_POST['product_price'];
    $productImage = $_POST['product_image'];
    $productName = $_POST['product_name'];
    $quantity = $_POST['quantity'];

    // Добавляем товар в корзину
    $cart->addToCart($productId, $quantity, $productPrice, $productName, $productImage);
    // Получаем общее количество товаров
$totalQuantity = $cart->getTotalQuantity();////////////////
// Сохраняем общее количество товаров в сессии
$_SESSION['totalQuantity'] = $totalQuantity;


    // Сериализуем корзину и сохраняем в сессии
    $_SESSION['cart'] = serialize($cart);
    $response = array(
        'message' => 'Товар добавлен в корзину',
        'cart' => $cart,
        'status' => 1,
        'totalQuantity'=>$totalQuantity

    );
   
    
    // Выводим данные в формате JSON
    header('Content-Type: application/json; charset=utf-8');
 
    echo json_encode($response);
}
?>