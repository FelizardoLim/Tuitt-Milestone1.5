<?php

$key = $_GET['key'];
//JSON FILE
$string = file_get_contents("cars.json");
$cars = json_decode($string, true);

//to delete
unset($cars[$key]);

//to show again the new array
$fp = fopen('cars.json', 'w');
fwrite($fp, json_encode($cars, JSON_PRETTY_PRINT));
fclose($fp);

//no need to refresh
header('Location: collectionpage.php');

?>
