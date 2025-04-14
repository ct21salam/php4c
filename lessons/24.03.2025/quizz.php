<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
div{
    background-color:pink;
    border: 1px solid black;
}
        </style>
</head>
<body>
    <div>
<h1>Quiz o wszystkim</h1>
<?php
    $_SESSION['questions'] = [
        0 => ["Stolica Włoch to:", "Rzym"],
        1 => ["Ile wynosi 8 + 12?", "20"],
        2 => ["Największa planeta w Układzie Słonecznym to:", "Jowisz"],
        3 => ["Który kontynent jest najmniejszy?", "Australia"]
    ];
    if (!isset($_SESSION['pytanie'])) {
        $_SESSION['pytanie'] = 0;
        $_SESSION['wynik'] = 0;
    }
    $totalQuestions = 4;
    ?>
    <p>Pytanie <?php print_r($_SESSION['pytanie'] + 1) ?> z 4</p>
    <form method="post">
        <label> <?= ($_SESSION['questions'][$_SESSION['pytanie']][0]) ?></label>
        <?php
        if (isset($_POST['next']) || $_SESSION['pytanie'] == 0) {
            echo '<input type="text" name="pytanie_' . $_SESSION['pytanie'] + 1 . '" id="pierwsze_pytanie">';
            echo '<input type="submit" name="check" value="Sprawdź">';
        }

        if (isset($_POST['check'])) {
            $_SESSION['wynik']++;
        }
        ?>
          <p>twoja odpowiedz to: <?= ($_POST['pytanie_' . +1]) ?> </p>
            <p>poprawna odpowiedz to: <?= ($_SESSION['questions'][0][1]) ?></p>
            <p>Liczba punktów to <?= ($_SESSION['wynik']) ?></p>
        <?php
           
            $_SESSION['pytanie']++;
            if ($_SESSION['pytanie'] < $totalQuestions) {
               
            }
        
        ?>
</div>
</body>
</html>