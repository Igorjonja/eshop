<?
session_start();
include_once "./classes/cart.php";

if ($_POST['productId'] != "") {
    $productId = $_POST['productId'];

    // Получаем корзину из сессии
    $cart = unserialize($_SESSION['cart']);

    // Удаляем товар из корзины
    $cart->removeProduct($productId);

    // Получаем обновленное общее количество товаров
    $totalQuantity = $cart->getTotalQuantity();

    // Сохраняем обновленную корзину в сессии
    $_SESSION['cart'] = serialize($cart);

    // Возвращаем данные в формате JSON
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