<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   
</head>
<body>
<?php $float=232.34; ?>
<?php $boolean=FALSE; ?>
<?php $string="Ala ma kota"; ?>
<?php $integer=44; ?>

<?php echo "echo dla ciągów znaków:$string"?>
<br>
<?php echo "echo dla liczby całkowitej:$integer"?>
<br>
<?php echo "echo dla liczby rzeczywistej$float"?>
<br>
<?php echo "echo dla wartości boolowskiej:$boolean"?>
<br>
<p> var_dump dla ciągów znaków <?php var_dump($string)   ?></p>

<p> var_dump dla liczby całkowitej <?php var_dump($integer)   ?></p>

<p> var_dump dlaliczby rzeczywistej <?php var_dump($float)   ?></p>

<p> var_dump dla wartości boolowskiej <?php var_dump($boolean)   ?></p>


</body>
</html>
    