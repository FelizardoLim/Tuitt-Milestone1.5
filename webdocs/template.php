<?php

session_start();
// if(isset($_SESSION['new_user']) && $_SESSION['new_user']){
// 	echo "<script>alert('log in successful.');</script>";
// 	unset($_SESSION['new_user']);
// }

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
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-sm-offset-6 col-md-3 col-md-offset-7 bannerdetails">
				<h3 style="margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</h3>
			</div>
		</div>
	</div>
	<div class="container-fluid content">

	</div>
	<div class="container-fluid footer">
		<?php require_once('footer.php') ?>
	</div>
</body>
</html>



<!-- container, row, col is always used in this sequence - to ensure the entire div takes the space alloted for that specific section -->

