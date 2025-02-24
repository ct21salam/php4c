
<?php
session_start();
setcookie("user", "", time() - 3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
  include 'menu.php';
  ?>
  <br>
  <h1>Strona wylogowania</h1>
  <form method="post">
    <input name="idziemy_do_domu" type="submit" value="KONIEC">
</form>
<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    session_unset();
    session_destroy();
}
?>
<?php
include 'print_r.php';
?>
<h1></h1>
</body>
</html>