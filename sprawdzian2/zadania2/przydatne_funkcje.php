<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        <label for="inputText">Usuń białe znaki:</label>
        <input type="text" name="inputText" id="inputText" required>
        <br>
        <label for="dwa">Usuń ukośniki:</label>
        <input type="text" name="dwa" id="dwa" required>
        <br>
        <label for="dwa">Zmien znaki HTML:</label>
        <input type="text" name="trzy" id="trzy" required>
        <button type="submit">wyslij</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["inputText"];
        $trimmedText = trim($text);
        var_dump( "<p>Oryginalny tekst: <strong>$text</strong></p>");
        var_dump( "<p>Po trim(): <strong>$trimmedText</strong></p>");
    }
    ?>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["dwa"];
        $strippedText = stripslashes($text);
        var_dump( "<p>Oryginalny tekst: <strong>$text</strong></p>");
        var_dump( "<p>Po stripslashes(): <strong>$strippedText</strong></p>");
    }
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["trzy"];
        $escapedText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
        var_dump ( "<p>Oryginalny tekst: <strong>$text</strong></p>");
        var_dump( "<p>Po htmlspecialchars(): <strong>$escapedText</strong></p>");
    }
    ?>
</body>
</html>