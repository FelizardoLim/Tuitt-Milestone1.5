<?php

// can also use $_REQUEST 
if (isset($_POST['btnfeedback'])) {

	$string = file_get_contents("feedback.json");

	$feedback = json_decode($string, true);

	$new_feedback['name'] = $_POST['name'];
	$new_feedback['subject'] = $_POST['subject'];
	$new_feedback['feedback'] = $_POST['feedback'];
	$new_feedback['approved'] = "FALSE";

	$feedback[] = $new_feedback; 

	$fp = fopen('feedback.json', 'w');
	fwrite($fp, json_encode($feedback, JSON_PRETTY_PRINT));
	fclose($fp);
}


?>


<div class="outerdiv col-xs-12 col-sm-6">
	<div class="contactdetails">
		<h3>Send Us Your Feedback</h3>
		<form class="form-group" method="POST">
			Name: <input class="form-control" type="text" name="name" placeholder="Type your name here..."><br>
			Subject: <input class="form-control" type="text" name="subject" placeholder="Type subject here..."><br>
			Feedback: <textarea class="form-control" type="text" name="feedback" rows="5" placeholder="Write your feedback here..."></textarea><br>
			<button class="btn btn-default" name="btnfeedback" type="submit">Send</button>
		</form>
	</div>
</div>
