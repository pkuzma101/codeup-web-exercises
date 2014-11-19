<?php

define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'national_parks_db');
define ('DB_USER', 'np_user');
define ('DB_PASS', '');

require '../inc/db_connect.php';

if(isset($_GET['page'])) {
	$pageNumber = $_GET['page'];
} else {
	$pageNumber = 1;
}
	
$offsetNumber = ($pageNumber - 1) * 4;

$parks = $dbc->query("SELECT * FROM national_parks LIMIT 4 OFFSET $offsetNumber")->fetchAll(PDO::FETCH_ASSOC);

// $parksSecondPage = $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET 4')->fetchAll(PDO::FETCH_ASSOC);

$numberOfParks = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

// if($offsetNumber > $numberOfParks) {

// }

?>

<html>
	<head>
		<title>National Parks Bonanza</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Parks</h1>
		<table class="table table-striped">

			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area in Acres</th>
			</tr>
			<? foreach($parks as $key => $park): ?>
			<tr>
				<? foreach($park as $attribute): ?>
				<td><?= htmlspecialchars(strip_tags($attribute)); ?></td>
				<? endforeach ?>
			<? endforeach ?>
			</tr>
		</table>
		<div>
			<? if($pageNumber > 1): ?>
			<a href="?page=<?= $pageNumber - 1 ?>" class='btn btn-info' id="previous"> < Previous </a>
			<? endif ?>
			<? if($pageNumber <= 2): ?>
			<a href="?page=<?= $pageNumber + 1 ?>" class='btn btn-danger' id="next">Next ></a>
			<? endif ?>
		</div>
	</body>
</html>