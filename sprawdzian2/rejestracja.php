<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <fieldset>
        <legend>Rejestracja</legend>
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
          <label for="pass">Wybierz jedną rolę:</label>
          <br>
          <input id="pass" name="pass"  value="Urzytkownik"  type="checkbox">
          Urzytkownik
          <br>
          <input id="pass" name="pass"  value="Autor"  type="checkbox">
          Autor
          <br>
          <input id="pass" name="pass"  value="Redaktor"  type="checkbox">
          Redaktor
          <br>
          <input id="pass" name="pass"  value="Administrator"  type="checkbox">
          Administrator
          
          <br>
          <br>
          <input type="submit" value="Zarejestruj">
</fieldset>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST)) {
        echo "Login jest wymagany";
    } else
        echo " ";
    
}
?>
</form>
</body>
</html>