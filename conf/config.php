<?php
define('DB_SEVER', getenv('MYSQL_SERVICE_HOST'));
define('DB_USER', getenv('databaseuser'));
define('DB_PASS', getenv('databasepassword'));
define('DB_DATABASE', getenv('databasename'));

// Create connection
echo DB_USER;
$conn = mysqli_connect(DB_SEVER, DB_USER, DB_PASS,DB_DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

