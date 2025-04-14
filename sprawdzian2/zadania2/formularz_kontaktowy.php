<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="login">Imie i nazwisko:</label>
        <br>
          <input autofocus id="login" name="login" placeholder="Imie i nazwisko" required type="text" value="<?= $_POST["login"]?? '' ?>">
          <br>
          <br>
          <label for="pass">Adres e-mail:</label>
          <br>
          <input id="pass" name="pass" placeholder="adres e-mail" required type="password">
          <br>
          <br>
          <label for="pass">przedział wiekowy:</label>
          <br>
          <input id="pass" name="pass" placeholder="hasło" required type="password">
          <br>
          <br>
          <label for="pass">Wiadomość:</label>
          <br>
          
          <input id="pass" name="pass" placeholder="hasło"  type="textarea">
          <br>
          <label for="pass">Zgoda na przetwarzanie danych</label>
          <br>
          <input id="pass" name="pass" placeholder="hasło" required type="checkbox">
          <br>
          <input type="submit" value="Zaloguj">
</body>
</html>