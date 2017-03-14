<div class="textcolor">
	<button type="button" class="btn btn-default glyphicon glyphicon-edit col-xs-12 col-sm-4" data-toggle="modal" data-target="#edit<?php echo $key; ?>"></button><!-- modal start -->
	<div class="modal fade" id="edit<?php echo $key; ?>" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Edit <?php echo "$name "; ?>Collection Inventory</h3>
				</div>
				<div class="modal-body">
					<form class="form-group" method="POST" action='edit.php?key=<?php echo $key; ?>'>
						<div class="form-group">
							<label for="name">Name:</label>
							<input class="textcolor form-control" type="text" name="name" value="<?php echo $name; ?>">
							<!-- value name calling not specified like original value='".$cars[$key]['name']."' because cars.json source not set at the beginning of codes -->
						</div>
						<div class="form-group">
							<label for="model">Model:</label>
							<input class="textcolor form-control" type="text" name="model" value="<?php echo $model; ?>">
						</div>
						<div class="form-group">
							<label for="image">Image:</label>
							<input class="textcolor form-control" type="text" name="image" value="<?php echo $image; ?>">
						</div>
						<div class="form-group">
							<label for="description">Description:</label>
							<input class="textcolor form-control" type="text" name="description" value="<?php echo $description; ?>">
						</div>
						<div class="form-group">
							<label for="price">Price:</label>
							<input class="textcolor form-control" type="text" name="price" value="<?php echo $price; ?>">
						</div>
						<div class="form-group">
							<label for="stocks">Stock:</label>
							<input class="textcolor form-control" type="text" name="stocks" value="<?php echo $stocks; ?>">
						</div>
						<button class="btn btn-default" type="submit" name="save">Save Changes</button>
					</form>
				</div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
		</div>
	</div><!-- modal end -->
</div>