<?php

function getRegister() {
	if(isset($_POST['register'])) {
		$new_user = ['username' => $_POST['username'], 
					'password' => sha1($_POST['password']),
					'role' => 'regular'];

		if($_POST['password'] == $_POST['confirmpassword']){
			$string = file_get_contents("user.json");
			$users = json_decode($string, true);

			$users[] = $new_user;
			// array_push($users, $new_user);

			$fp = fopen('user.json', 'w');
			fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
			fclose($fp);

			echo "<script type='text/javascript'>
					alert('Registration successful.');
				</script>";
		}
	}
}

getRegister();

?>

<div class="textcolor">
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#registermodal">No account? Create one!</button><!-- modal start -->
	<div class="modal fade" id="registermodal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Register</h3>
				</div>
				<div class="modal-body">
					<form class="form-group" method="POST">
						Username: <input class="form-control" type="text" name="username" placeholder="Username..."><br>
						Password: <input class="form-control" type="password" name="password" placeholder="Password..."><br>
						Confirm Password: <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password..."><br>
						<button class="btn btn-default" type="submit" name="register">Register</button>
					</form>
				</div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
		</div>
	</div><!-- modal end -->
</div>