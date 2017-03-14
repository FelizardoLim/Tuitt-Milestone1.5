<?php

//came from delete cart button key targeting
$key = $_GET['deletecar'];

//delete cart item thru existing active session
session_start();
unset($_SESSION['cart_cars'][$key]);

//no need to refresh
header('Location: cartcars.php');

?>
