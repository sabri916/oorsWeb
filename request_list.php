
<html>

<head>
	<title> OORS Web - Request Page</title>
</head>

<body>

	<table border="1">
		<tr>
			<td>Request ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Floor</td>
			<td>Window</td>
			<td>Laundry</td>
			<td>Address</td>
			<td>Date/Time</td>
		</tr>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "lg";
	$dbname = "oorsWeb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	//Query
	$sql = "SELECT * FROM request_list";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
					<td>" . $row["request_id"].
					"</td><td>" . $row["first_name"].
					"</td><td>" . $row["last_name"].
					"</td><td>" . $row["floor"].
					"</td><td>" . $row["window"].
					"</td><td>" . $row["laundry"].
					"</td><td>" . $row["address"].
					"</td><td>" . $row["request_date"].
					"</td></tr></table>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>




</body>

</html>