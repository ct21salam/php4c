<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  include 'menu.php';
  ?>
  <h1>Strona logowania</h1>
 
  <?php 
  if ($_SERVER['REQUEST_METHOD'] = 'POST')
  {
    if (isset($_POST["wyloguj"]))
    {
        session_unset();
        session_destroy();
    }
    if (isset($_POST["zaloguj"]))
    {
        if ($_POST['login'] === 'admin' && $_POST['pass'] === 'admin')
        {
            echo '<p>Udane logowanie. Utworzono zmienne sesji.</p>';
            $_SESSION["login"] = $_POST['login'];
            $_SESSION["pass"] = $_POST['pass'];
            $_SESSION["login_status"] = true;
        }
    else
    {
        echo '<p>Login lub hasło jest nieprawidłowe</p>';
    }
  }
}
?>
<form method="post">

    <?php 
    if (isset($_SESSION["login_status"]) && $_SESSION["login_status"])
    {
        ?>
       <input type=submit value="wyloguj"> 
    <?php
    }
    
    else
    ?>
    <?php
{?>
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
   <?php 
}?>
</form>
</body>
</html>

