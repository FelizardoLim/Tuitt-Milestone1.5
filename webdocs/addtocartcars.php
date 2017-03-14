<?php

session_start();
$key = $_GET['key'];
$quantity = $_POST['quantity'];

//if stock update whenever purchase has been completed is necessary. connect quantity value to existing json file and rewrite to update. open write json. 
//$items[$key]['stocks'] -= $quantity;

if(isset($_SESSION['cart_cars'][$key])){
	$_SESSION['cart_cars'][$key]+=$quantity;
} else {
	$_SESSION['cart_cars'][$key] = $quantity;
}

header('location: collectionpage.php');

?>