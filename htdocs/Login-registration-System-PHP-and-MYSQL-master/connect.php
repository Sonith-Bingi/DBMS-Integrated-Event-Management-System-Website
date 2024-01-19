<?php
	$eventName = $_POST['eventName'];
	$eventType = $_POST['eventType'];
	$location = $_POST['location'];
	$email = $_POST['email'];
	$budget = $_POST['budget'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration2(eventName, eventType, location, email, budget, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $eventName, $eventType, $location, $email, $budget, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "REGISTRATION DONE SUCCESFULLY";
		$stmt->close();
		$conn->close();
	}
?>