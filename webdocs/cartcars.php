<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart Cars</title>
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
	<div class="container-fluid cartcars">
		<div class="row">
			<div class="cartcarsdetails">
				<?php 
				$string = file_get_contents('cars.json');
				$cars = json_decode($string, true);
				$total = 0;

				if(isset($_SESSION['cart_cars'])) {
					foreach ($_SESSION['cart_cars'] as $key => $quantity) {
						$name = $cars[$key]['name'];
						$model = $cars[$key]['model'];
						$description = $cars[$key]['description'];
						$image = $cars[$key]['image'];
						$price = $cars[$key]['price'];
						$stocks = $cars[$key]['stocks'];
						//$p double - remove decimal points substr... to locate integer after PHP and str_replace... to remove ,s and replace with space
						$p = (double)substr(str_replace(",", "", $price),4);
						//operation
						$subtotal = $p*$quantity;
						//shorthand for $total = $total + $subtotal
						$total += $subtotal;

						echo "<div class='col-xs-12 col-sm-6 col-lg-4 collectiondetails'>";
							echo "<div class='cdetails'>";
								echo "<h3>".$name."</h3><span>Unit/s bought: $quantity</span>";
								echo "<h4>Model: ".$model."</h4>";
								echo "<img class='carsimg col-xs-12' src='".$image."'>";
								echo "<p>".$description."</p>";
								echo "<p>Price: ".$price."</p>";
								echo "<p>In Stock: ".$stocks."</p>";
								echo "<a href='deletecartcars.php?deletecar=$key'><button class='col-xs-12 col-sm-8 btn btn-default'>Remove From Cart</button></a>";
							echo "</div>";
						echo "</div>";
					}
				}
				?>
			</div>
			<div class="col-xs-12 totaldiv">
				<div class="totalbg">
					<?php echo "<h2 style='margin-top: 10px;'>Total: ".number_format($total,2)."</h2>"; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer">
		<?php require_once('footer.php') ?>
	</div>
</body>
</html>

