<?php 

$servername = "localhost";
$username = "perderesmas_perderesmas";
$password = "*d3vu3lt4c0nz00m";
$dbname = "perderesmas_gloria";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}