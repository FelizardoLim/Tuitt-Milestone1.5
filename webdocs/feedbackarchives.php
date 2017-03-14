<?php

$string = file_get_contents("feedback.json");
$feedback = json_decode($string, true);

if(isset($_GET['key'])){
	$key = $_GET['key'];

	$feedback[$key]['approved'] = "TRUE";

	$fp = fopen('feedback.json', 'w');
	fwrite($fp, json_encode($feedback, JSON_PRETTY_PRINT));
	fclose($fp);

} 

foreach ($feedback as $key => $value) {
	$name = $value['name'];
	$subject = $value['subject'];
	$feedback = $value['feedback'];

	if(isset($_SESSION['role']) && $_SESSION['role']=='admin' && $value['approved']=='FALSE'){

		echo "
			<div class='archivedetails'> 
				<div class='adetails'
					<p>Name: $name</p>
					<p>Subject: $subject</p>
					<p>Feedback: $feedback</p>
					<a href='feedbackarchives.php?key=$key'><button>Approve?</button></a>
				</div>
			</div>";
	}
	
	if($value['approved']=='TRUE'){
		

		echo "
			<div class='archivedetails'> 
				<div class='adetails'
					<p>Name: $name</p>
					<p>Subject: $subject</p>
					<p>Feedback: $feedback</p>
				</div>
			</div>";
	}
}

?>
