<?php

function setLogin() {

	// $users = [
	// 	['username' => 'admin', 
	// 	'password' => 'admin',
	// 	'role' => 'admin'],
	// 	['username' => 'rj', 
	// 	'password' => 'password',
	// 	'role' => 'regular'],
	// 	['username' => 'test', 
	// 	'password' => 'test',
	// 	'role' => 'regular']
	// ];

// json step by step process to add username content on php login directory

	// $fp = fopen('user.json', 'w');
	// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	// fclose($fp);

	$string = file_get_contents("user.json");

	// echo $string;

	$users = json_decode($string, true);

	// print_r($array);
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		
		foreach ($users as $user) {
			if($username==$user['username']&&
				$password==$user['password']){
					$_SESSION['username'] = $username;
					$_SESSION['role'] = $user['role'];
					// $_SESSION['new_user'] = TRUE; for placing alert for login successful. 
			} else {
				header('location: template.php'); 
			}
		}
	}
}

?>