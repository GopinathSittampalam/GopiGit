<?php
define('DB_SEVER', getenv('MYSQL_SERVICE_HOST'));
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASS', getenv('MYSQL_PASSWORD'));
define('DB_DATABASE', getenv('MYSQL_DATABASE'));

// Create connection
$conn = mysqli_connect(DB_SEVER, DB_USER, DB_PASS,DB_DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

