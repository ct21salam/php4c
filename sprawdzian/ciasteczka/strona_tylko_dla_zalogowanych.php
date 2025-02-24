<?php
session_start();
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
    include 'menu.php' ;
    ?>
    <br>
    <h1>Strona dla zalogowanych</h1>
    <?php
    if (isset($_SESSION["login_status"]))
    {
        include 'print_r.php';
    }
    else
    {
        echo '<p>Nie jesteś zalogowany</p>';
    }
    ?>
    <h1></h1>
</body>
</html>