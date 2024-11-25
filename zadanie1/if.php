<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color:darkorchid;">
    <?php 
    $losowa=RAND(1, 30);
    
    ?>
    <p > <center><?php echo $losowa ?></center></p>
    </h2>
    <h4 style="text-align:center; color:magenta;">
    <?php
if ($losowa >= 20)
  echo "Wylosowana liczba jest wieksza bądź równa 20";
?>
    </h4>
    <h4 style="text-align:center; color:navy;">
    <?php


if ($losowa%2==0) echo "liczba jest parzysta";
  else echo "liczba jest nieparzysta";
?>
</h4>
<h4 style="text-align:center; color:deeppink;">
    <?php
    if($losowa<=10) echo "Pierwsza dziesiątka";
    elseif($losowa<=20)echo "Druga dziesiątka";
else echo "trzecia dziesiątka";
?>
</h4>
</body>
</html>