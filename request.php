<html>

<head>
	<title> OORS Web - Request Page</title>
</head>

<body>
	<h1>OORS Web</h1>

	<form action="request_confirm.php" method="POST">
		First name:<br />
		<input type="text" name="first_name" value="">
		<br /><br />
		Last name:<br />
		<input type="text" name="last_name" value="">
		<br /><br />
		
		Required Services:
		<br />
		<input type="checkbox" name="floor" value="floor" /> Floor Cleaning <br />
		<input type="checkbox" name="window" value="window" /> Window Cleaning <br />
		<input type="checkbox" name="laundry" value="laundry" /> Laundry <br />

		<br /><br />
		Address:
		<br />
		<textarea name="address" rows="10" cols="50">
		</textarea>
		<br />

		<input type="submit" value="Submit">
	</form>


</body>

</html>