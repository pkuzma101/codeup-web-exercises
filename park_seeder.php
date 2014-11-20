<?php

define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'national_parks_db');
define ('DB_USER', 'np_user');
define ('DB_PASS', '');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$parks = [
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.67, 'description' => 'A rainy mess'],
	['name' => 'Badlands', 'location' => 'Utah', 'date_established' => '1978-11-10', 'area_in_acres' => 892372.0, 'description' => 'Dinosaur bones are found here'],
	['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1964-09-12', 'area_in_acres' => 388566.0, 'description' => 'A large, moist cave'],
	['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => 530922.0, 'description' => 'Alaska.  Enough said'],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => 1047116.0, 'description' => 'A large, glorified swamp'],
	['name' => 'Great Smoky Mountains', 'location' => 'Tennessee', 'date_established' => '1934-06-15', 'area_in_acres' => 9354695.0, 'description' => 'Good for hiking'],
	['name' => 'Joshua Tree', 'location' => 'California', 'date_established' => '1994-10-31', 'area_in_acres' => 1383340.0, 'description' => 'A U2 album'],
	['name' => 'Sequoia', 'location' => 'California', 'date_established' => '1890-09-25', 'area_in_acres' => 909274.0, 'description' => 'Some nice trees'],
	['name' => 'Redwood', 'location' => 'California', 'date_established' => '1968-10-2', 'area_in_acres' => 112512.05, 'description' => 'Some tall trees'],
	['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-10-1', 'area_in_acres' => 3691191.0, 'description' => 'Scenic and beautiful']
];

$numRows = $dbc->exec('DELETE FROM national_parks');

echo "Deleted $numRows rows" . PHP_EOL;

$stmt = $dbc->prepare('INSERT INTO national_parks(name, location, date_established, area_in_acres, description) VALUES(:name, :location, :date_established, :area_in_acres, :description)');

foreach($parks as $park) {

	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

	$stmt->execute();

// echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}

// $rows = $dbc->query('SELECT name, location, date_established, area_in_acres, description FROM national_parks LIMIT 4')->fetchAll(PDO::FETCH_ASSOC);;

// $rowCount = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

// echo "There are $rowCount rows" . PHP_EOL;

// foreach($rows as $row) {
// 	echo "ID: {$row['id']}" . PHP_EOL;
// 	echo "Name: {$row['name']}" . PHP_EOL;
// 	echo "Location: {$row['location']}" . PHP_EOL;
// 	echo "Date Established: {$row['date_established']}" . PHP_EOL;
// 	echo "Area in Acres: {$row['area_in_acres']}" . PHP_EOL;
// 	echo "Description: {$row['description']}" . PHP_EOL;
// }

?>