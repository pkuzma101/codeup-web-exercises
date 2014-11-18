<?php

define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'employees');
define ('DB_USER', 'pkuzma101');
define ('DB_PASS', 'duster2');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

?>