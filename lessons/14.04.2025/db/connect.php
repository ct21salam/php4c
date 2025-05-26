<?php
$servername = "localhost";
$username = "sala";
$password = "marcelsala123";
$dbname = "sala";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Nie przeszło: " . mysqli_connect_error());
}

?>