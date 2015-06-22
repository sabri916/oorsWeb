<?php

//Get values from from Form

	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$floor = 0;
	$window = 0;
	$laundry = 0;

	if(isset($_POST["floor"]))
		$floor = 1;

	if(isset($_POST["window"]))
		$window = 1;

	if(isset($_POST["laundry"]))
		$laundry = 1;

	$address = $_POST["address"];

	$servername = "localhost";
	$username = "root";
	$password = "lg";
	$db_name = "oorsWeb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db_name);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


	//Use DB
	$sql = "INSERT INTO request_list (first_name, last_name, floor, window, laundry, address, request_date) 
	VALUES ('$first_name', '$last_name', $floor, $window, $laundry, '$address', NOW())";

	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	//close connection
	mysql_close($conn);
?>

<html>

<head>
	<title> OORS Web - Request Page</title>
</head>

<body>

	<h1>Request Sent!</h1>

</body>

</html>