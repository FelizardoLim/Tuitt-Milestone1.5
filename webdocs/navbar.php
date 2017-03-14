<div class="container">
	<div class="navbar-header"><!-- navbar-left to position -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="template.php">
			CARS ULTD <!-- text or image -->
		</a>
	</div>
	<div class="collapse navbar-right navbar-collapse" id="mynavbar">
		<ul class="nav navbar-nav text-uppercase">
			<li><a href="template.php">Home</a></li>
			<li><a href="collectionpage.php">Collections</a></li>
			<li><a href="aboutpage.php">About</a></li>
			<li><a href="contactpage.php">Contact</a></li>
			<li><a href="feedbackpage.php">Feedback</a></li>
			<?php if(isset($_SESSION['username'])) { ?>
			<li><a href="logout.php">Logout</a></li>
			<?php } else {
				echo "<li><a href='login.php'>Login</a></li>";
				} 
			?>
			<?php if(isset($_SESSION['cart_cars'])) { ?>
			<li><a class="glyphicon glyphicon-shopping-cart" aria-hidden="true" href="cartcars.php"></a></li>
			<?php 
			} else {
				echo "";
			} 
			?>
		</ul>
	</div>
</div>