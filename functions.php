<?php

//require mysql connection
include ('database/DBController.php');

//require product class
include ('database/Product.php');


//require cart class
include ('database/Cart.php');


//DBController object
$db = new DBController();

//Product object
$product = new Product($db);

//cart object
$Cart = new Cart($db);
$arr= array(
    "cus_id" =>1,
    "pro_id" =>3
);

$Cart->insertintoCart($arr);

