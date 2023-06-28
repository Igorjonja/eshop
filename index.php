<?php
session_start();


include_once "./classes/cart.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <!--jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>


    <!-- Navigation-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav> -->






    <!-- Header-->
    <header class="bg-dark py-3">
        <div class="container px-4 px-lg-5 my-1">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>

    <div id="cart-content" class="container">

        <? $cart = new Cart(); // Создаем объект корзины
        $cart->displayCart(); 
        
        
        ?>


    </div>



    <!-- Section-->

    <form class="d-flex justify-content-center pt-4">
        <button class="btn btn-outline-dark" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span id="total-quantyty" class="badge bg-dark text-white ms-1 rounded-pill"><?echo $_SESSION["totalQuantity"];?></span>
        </button>
    </form>

    <div class="col-py-3">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-4 row-cols-1 row-cols-md-2  row-cols-xl-4 justify-content-center">
                <!--Product containers-->




                <?include "viewItems.php" ?>

                




                
            </div>
        </div>
    </div>









    <!-- Footer-->
    <footer class="py-2 bg-secondary .text-secondary">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="./assets/js/scripts.js"></script>
    <!-- Increase the number of goods-->
    <script src="./assets/js/counter.js"></script>
    <!-- Preperring goods to basket -->
    <script src="./assets/js/jqAddRequest.js"></script>
    <!-- Removing goods from basket -->
    <script src="./assets/js/jqRemoveRequest.js"></script>
    
    
</body>

</html>