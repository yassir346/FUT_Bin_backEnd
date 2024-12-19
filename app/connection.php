<?php
$servername = "db";
$username = "my_user";
$password = "my_password";
$database = "FUT_backend_database";

// 1- create connection with database
// 2 - run docker compose


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>