<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje liczbowe</title>
    <style>
   p{
      color:aliceblue; background-color:darkblue;

   }

       </style> 
</head>
<body>
    <p>Funkcja abs dla liczby -2 zwraca wynik:<b> <?php echo abs(-2)?></p></b>
    <p>Funkcja min dla zestawu liczb 0,150,30,20,-8,-200 zwraca wynki: <b><?php echo min( 0,150,30,20,-8,-200)?></p></b>
    <p>Funkcja max dla zestawu liczb 0,150,30,20,-8,-200 zwraca wynik: <b><?php echo max( 0,150,30,20,-8,-200)?></p></b>
    <p>Funkcja pi zwraca wynik:<b> <?php echo pi()?></p></b>
    <p>Funkcja round dla liczby 3,4 zwraca wynik:<b> <?php echo round( 3.4)?></p></b>
    <p>Funkcja round dla liczby 3,6 zwraca wynik: <b><?php echo round( 3.6)?></p></b>
    <p>Funkcja round dla liczby 5,045 zwraca wynik:<b> <?php echo round( 5.045)?></p></b>
    <p>Funkcja round dla liczby 5,055 zwraca wynik:<b> <?php echo round( 5.055)?></p></b>
    <p>Funkcja rand dla liczby od z przedziału od 900 do 1000 zwraca wynik: <b><?php echo rand(900,1000)?></p></b>
    <p>Funkcja sqrt dla liczby 0 zwraca wynik: <b><?php echo sqrt(0)?></p></b>
    <p>Funkcja sqrt dla liczby 25 zwraca wynik: <b><?php echo sqrt(25)?></p></b>
    <p>Funkcja sqrt dla liczby 64 zwraca wynik: <b><?php echo sqrt(64)?></p></b>
    <p>Funkcja sqrt dla liczby 65536 zwraca wynik: <b><?php echo sqrt(65536)?></p></b>
</html>