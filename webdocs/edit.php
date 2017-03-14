<?php

// removed for editmodal function
// function //displayContent() {
	session_start();
	if(isset($_GET['key'])){
		$key = $_GET['key'];
		//JSON FILE
		$string = file_get_contents("cars.json");
		$cars = json_decode($string, true);

		//to edit
		if($_SESSION['role']=='admin'){

			if(isset($_POST['save'])){
				$string = file_get_contents("cars.json");
				$cars = json_decode($string, true);

				$new_cars['name'] = $_POST['name'];
				$new_cars['model'] = $_POST['model'];
				$new_cars['image'] = $_POST['image'];
				$new_cars['description'] = $_POST['description'];
				$new_cars['price'] = $_POST['price'];
				$new_cars['stocks'] = $_POST['stocks'];
				print_r($new_cars);
		//replace an entire array
				$cars[$key] = $new_cars;
		// save
				$fp = fopen('cars.json', 'w');
				fwrite($fp, json_encode($cars, JSON_PRETTY_PRINT));
				fclose($fp);
		// relocate after click
				header('Location: collectionpage.php');
			}
		}
	}
// }
// removed for edit modal function end

		// to show again the new array
		// $fp = fopen('cars.json', 'w');
		// fwrite($fp, json_encode($cars, JSON_PRETTY_PRINT));
		// fclose($fp);

		//no need to refresh
		// header('Location: template.php');

function editForm() {

	if(isset($_GET['key'])){
		$key = $_GET['key'];
		//JSON FILE
		$string = file_get_contents("cars.json");
		$cars = json_decode($string, true);

		echo "<div class='collectiondetails'>
			<div class='col-xs-12 additem'>
				<h3>Edit Collection Inventory</h3><br>
				<form class='form-horizontal formadd' method='POST'>
					<div class='form-group'>
						<label class='col-xs-4' for='name'>Name:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='name' value='".$cars[$key]['name']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='model'>Model:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='model' value='".$cars[$key]['model']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='image'>Image:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='image' value='".$cars[$key]['image']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='description'>Description:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='description' value='".$cars[$key]['description']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='price'>Price:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='price' value='".$cars[$key]['price']."'>
					</div>
					<div class='form-group'>
						<label class='col-xs-4' for='stocks'>Stock:</label>
						<input class='textcolor col-xs-7' class='form-control' type='text' name='stocks' value='".$cars[$key]['stocks']."'>
					</div>
					<button class='btn btn-default' type='submit' name='save'>Save Changes</button>
				</form>
			</div>
		</div>";
	}
}

// require_once('template.php');

?>