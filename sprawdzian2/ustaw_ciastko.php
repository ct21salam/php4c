<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    } else {
    }
    ?>
    <form method="post">
        <label for="nazwa">Nazwa</label>
        <br>
        <input required type="text" id="nazwa" name="nazwa"  value="favorite_band">
        <br>
        <br>
        <label for="cookie">zawartość ciastka</label>
        <br>
        <textarea name="cookie" id="cookie"></textarea>
        <br>
        <br>
        <label for="wygasa">wygasa</label>
        <br>
        <input type="number" value="60" name="wygasa" id="wygasa">
        <br>
        <br>
        <input type="submit" value="Ustaw">
        <br>
        <br>
        <a href="strona_glowna.php">Strona główna</a>

    </form>
</body>
</html>