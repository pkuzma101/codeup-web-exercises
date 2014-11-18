<?php

define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'national_parks_db');
define ('DB_USER', 'np_user');
define ('DB_PASS', '');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$parks = [
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.67],
	['name' => 'Badlands', 'location' => 'Utah', 'date_established' => '1978-11-10', 'area_in_acres' => 892372.0],
	['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1964-09-12', 'area_in_acres' => 388566.0],
	['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => 530922.0],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => 1047116.0],
	['name' => 'Great Smoky Mountains', 'location' => 'Tennessee', 'date_established' => '1934-06-15', 'area_in_acres' => 9354695.0],
	['name' => 'Joshua Tree', 'location' => 'California', 'date_established' => '1994-10-31', 'area_in_acres' => 1383340.0],
	['name' => 'Sequoia', 'location' => 'California', 'date_established' => '1890-09-25', 'area_in_acres' => 909274.0],
	['name' => 'Redwood', 'location' => 'California', 'date_established' => '1968-10-2', 'area_in_acres' => 112512.05],
	['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-10-1', 'area_in_acres' => 3691191.0]
];

foreach($parks as $park) {
	$query = "INSERT INTO national_parks(name, location, date_established, area_in_acres) 
			  VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";
$dbc->exec($query);

echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}






?>