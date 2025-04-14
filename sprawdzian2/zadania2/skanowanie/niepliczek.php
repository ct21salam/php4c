<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $file = fopen('zapis.txt', 'w');
        fwrite($file, $name);
    }
    ?>
    <h1>Mega fajny nie plik</h1>
    <form action="niepliczek.php" method="post">
        <p>Cosik wpisz: <input type="textarea" name="name" id=""></p>
        <input type="submit" value="zapisz">
</form>    
</body>
</html>