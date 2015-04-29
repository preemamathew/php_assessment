<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Assessment\DataInsert;
use Nahk\PDO\SQL;

$host		= $argv[1];
$username	= $argv[2];
$password   = $argv[3];
$database	= $argv[4];
$dataLimit	= $argv[5];

if ($host && $username && $password && $database && $dataLimit) {

	$conn 		= new SQL($host, $database, $username, $password);

	$dataInsert 		= new DataInsert($conn);
	$dataInsert->limit 	= $dataLimit;
	$dataInsert->insertData();
} else {
	echo "\n Please enter the command in following format \n\n-\t php app.php <host> <username> <password> <database> <limit> \n";
}