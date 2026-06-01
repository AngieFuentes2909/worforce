<?php 	

$localhost = getenv('DB_HOST') ?: "127.0.0.1";
$username = getenv('DB_USER') ?: "root";
$password = getenv('DB_PASS') !== false ? getenv('DB_PASS') : "";
$dbname = getenv('DB_NAME') ?: "pos_stock";
$port = getenv('DB_PORT') ?: "3306";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname, $port);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>