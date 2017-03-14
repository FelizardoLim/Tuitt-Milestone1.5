<?php 

if(isset($_POST['add'])){
	$string = file_get_contents("cars.json");
	$cars = json_decode($string, true);

	$new_cars['name'] = $_POST['name'];
	$new_cars['model'] = $_POST['model'];
	$new_cars['image'] = $_POST['image'];
	$new_cars['description'] = $_POST['description'];
	$new_cars['price'] = $_POST['price'];
	$new_cars['stocks'] = $_POST['stocks'];

	$cars[] = $new_cars;

	$fp = fopen('cars.json', 'w');
	fwrite($fp, json_encode($cars, JSON_PRETTY_PRINT));
	fclose($fp);
}

?>


<?php 
function getCars() {
	if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){ 
?>
<div class="outerdiv">
	<div class="col-xs-12 additem">
		<!-- <button class="btn btn-default addButton" type="submit" name="add">Add Collection</button> -->
	<!-- <div class="col-xs-12 additem" style='display:none'> -->
		<h3>Add NEW Collection Item</h3><br>
		<form class="form-horizontal formadd" method="POST">
			<div class="form-group">
				<label class="col-xs-4" for="name">Name:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="model">Model:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="model">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="image">Image:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="image">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="description">Description:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="description">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="price">Price:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="price">
			</div>
			<div class="form-group">
				<label class="col-xs-4" for="stocks">Stock:</label>
				<input class="textcolor col-xs-7" type="text" class="form-control" name="stocks">
			</div>
			<button class="btn btn-default" type="submit" name="add">Add Collection</button>
		</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	// $('.addButton').click(function(){
	// 	$('.additem').show();
	// 	$('.addButton').hide();
	// });
	
</script>
<?php 
	} else {
		echo "";
	}
}
?>