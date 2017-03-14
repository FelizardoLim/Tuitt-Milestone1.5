<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template Website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="templatestyle.css"><!-- css file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top navigation">
		<?php require_once('functionlib.php'); setLogin(); ?>
		<?php require_once('navbar.php') ?>
	</div>
	<div class="container-fluid content">
		<div class="row collection">
		<h2 style="color: white; padding-top: 30px;">Car Collections</h2>
			<?php require_once('addcollectionitem.php');  ?>
			<?php require_once('collection.php') ?>
			<?php getCars(); ?>
		</div>
	</div>
	<div class="container-fluid footer">
		<?php require_once('footer.php') ?>
	</div>
</body>
</html>