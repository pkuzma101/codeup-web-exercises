<?php

var_dump($_GET);
var_dump($_POST);

?>

<html>
	<head>
		<title>My First Form</title>
	</head>
	<body>
		<h2>User Login</h2>
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
					<textarea id="message" name="message" value="" placeholder="Enter Message"></textarea>
				</p>
				<p>
					<button type="submit">Welcome to your doom!</button>
				</p>
			</form>
		<h2>Compose an Email</h2>
			<form>
				<p>
					<label for="to">To</label>
					<input id="to" name="to" type="text" placeholder="Receiver's Email">
				</p>
				<p>
					<label for="from">From</label>
					<input id="from" name="from" type="text" placeholder="Your Email">
				</p>
				<p>
					<label for="subject">Subject</label>
					<input id="subject" name="subject" type="text" placeholder="Email Subject">
				</p>
				<p>
					<label for="body">Write your email</label>
					<textarea id="body" name="body" rows="20" cols="40" value="" placeholder="Type your email"></textarea>
				</p>
				<p>
					<button type="submit">Send your email!</button>
				</p>
			</form>
	</body>
</html>




