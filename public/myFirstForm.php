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
				<p>
					<label for="save">Would you like to save a copy to your 'sent' folder?</label>
						<input type="checkbox" id="save" name="save" value="yes" checked>
						<label for="save">Check to save this to your 'sent' folder</label>
					</label>
				</p>
			</form>
		<h2>Multiple Choice Test</h2>
			<form>
				<p>
					Where is the magicite 'Ragnarok' found?
				</p>
				<label>
					<input type="radio" id="q1a" name="q1" value="Man in Tzen">
					Man in Tzen
				</label>
				<label>
					<input type="radio" id="q1b" name="q1" value="Magitek Factory">
					Magitek Factory
				</label>
				<label>
					<input type="radio" id="q1c" name="q1" value="Man in Narshe">
					Man in Narshe
				</label>
				<label>
					<input type="radio" id="q1d" name="q1" value="Phoenix Cave">
					Phoenix Cave
				</label>
				<p>
					Which esper teaches 'Firaga,' 'Blizzaga,' and 'Thundaga?'
				</p>
				<label>
					<input type="radio" id="q2a" name="q2" value="Maduin">
					Maduin
				</label>
				<label>
					<input type="radio" id="q2b" name="q2" value="Valigarmanda">
					Valigarmanda
				</label>
				<label>
					<input type="radio" id="q2c" name="q2" value="Lakshmi">
					Lakshmi
				</label>
				<label>
					<input type="radio" id="q2d" name="q2" value="Phoenix">
					Phoenix
				</label>
				<p>
					<label for="question">Which of the following magicite are found at the Magitek Factory?</label>
					<input type="checkbox" id="question" name="question" value="Maduin">
					<label for="question">Maduin</label>
					<input type="checkbox" id="question" name="question" value="Bismark">
					<label for="question">Bismark</label>
					<input type="checkbox" id="question" name="question" value="Seraphim">
					<label for="question">Seraphim</label>
					<input type="checkbox" id="question" name="question" value="Ifrit">
					<label for="question">Ifrit</label>
					<input type="checkbox" id="question" name="question" value="Siren">
					<label for="question">Siren</label>
				</p>
					<p>
						<button type="submit">Submit Answers</button>
					</p>
			</form>
	</body>
</html>




