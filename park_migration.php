<?php

define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'national_parks_db');
define ('DB_USER', 'np_user');
define ('DB_PASS', '');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(240) NOT NULL,
	location VARCHAR(50) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres FLOAT(50) NOT NULL,
	PRIMARY KEY (id)
)';

$dbc->exec($query);

?>