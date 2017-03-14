<div class="textcolor">
	<button type="button" class="btn btn-default glyphicon glyphicon-shopping-cart col-xs-12 col-sm-4 addbtn" data-toggle="modal" data-target="#addToCart<?php echo $key; ?>"></button><!-- modal start -->
	<div class="modal fade" id="addToCart<?php echo $key; ?>" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Add To Cart</h3>
				</div>
				<div class="modal-body">
					<form class="form-group" method="POST" action='addtocartcars.php?key=<?php echo $key; ?>'>
						Quantity: <input class="form-control" type="number" name="quantity" min=0 max='<?php echo $stocks; ?>'><br>
						<button class="btn btn-default" type="submit" name="addToCart">Add To Cart</button>
					</form>
				</div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
		</div>
	</div><!-- modal end -->
</div>