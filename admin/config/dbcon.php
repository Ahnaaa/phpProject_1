<?php

$host = "localhost";
$username = "root";
$password = "root";
$database = "bookdb";



// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} 

echo "Connected successfully";

?>
