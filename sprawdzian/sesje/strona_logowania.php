<?php
session_start()
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
  <h1>Strona logowania</h1>
  <form method="post">
    <label for="login">Login:</label>
    <br>
      <input autofocus id="login" name="login" placeholder="login" required type="text" value="<?= $_POST["login"]?? '' ?>">
      <br>
      <br>
      <label for="pass">Hasło:</label>
      <br>
      <input id="pass" name="pass" placeholder="hasło" required type="password">
      <br>
      <br>
      <input type="submit" value="Zaloguj">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if ($_POST['login'] === 'Admin' && $_POST['pass'] === '123')
    {
        echo '<p>Udane logowanie. Utworzono zmienne sesji.</p>';
        $_SESSION["login"] = $_POST['login'];
        $_SESSION["pass"] = $_POST['pass'];
        $_SESSION["login_status"] = true;
        $_COOKIE["GOOD_PASS_DEF"]?? "";
    }
    else
    {
        echo '<p>Login i hasło są nieprawidłowe</p>';
    }
} 
?>

<h1></h1>
</body>
</html>