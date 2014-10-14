<?php

var_dump($_GET);
var_dump($_POST);

?>

<html>
	<head>
		<title>My First Form</title>
	</head>
	<body>
		<form method="GET" action="/myFirstForm.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Username">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Password">
			</p>
			<p>
				<label for="phone">Phone Number</label>
				<input type="text" id="phone number" name="phone number" type="text" placeholder="123-456-7890">
			</p>
			<p>
				<button type="submit">Welcome to your doom!</button>
			</p>
		</form>
	</body>
</html>




