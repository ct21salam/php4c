<?php
$servername = "localhost";
$username = "Sala";
$password = "marcelsala123";
$dbname = "Sala";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Nie przeszło: " . mysqli_connect_error());
}

?>