<?php

include_once "./config/pdoConnect.php";


$myPDO = new pdoConnect();
// echo "<pre>";
// print_r($PDO);

$result = $myPDO->PDO->query('SELECT * FROM producttb');
// $productsInfo=$result->fetch();


$products=array();
// echo "<pre>";
// print_r($productsInfo);

while($productsInfo=$result->fetch()){
    
    $products[]=$productsInfo;
    

}
