<?php

session_start();

getLogin(); 

function getLogin() {

if(!isset($_SESSION['username'])){

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
	<div class="container-fluid content" id="collection">
		<div class="loginbg" id="contact">
			<div class="outerdiv col-sm-offset-2 col-sm-8 col-xs-12">
				<div class="login">
					<h3>Login</h3>
					<form class="form-group" method="POST">
						Username: <input class="form-control" type="text" name="username" placeholder="Type your Username..."><br>
						Password: <input class="form-control" type="password" name="password" placeholder="Type your Password..."><br>
						<!-- <input type="submit" name="login" value="Login"> -->
						<button class="btn btn-default" name="login" type="submit">Login</button>
					</form>
					<?php require_once('register.php'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer">
		<?php require_once('footer.php') ?>
	</div>
</body>
</html>

<?php

	} else {
		header('location: template.php'); 
		//echo "Welcome ".$_SESSION['username'];
	}
}

?>