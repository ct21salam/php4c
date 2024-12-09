<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$owoce=array_fill(8,5,"mango");
?>
  
    <pre>
    <?php print_r($owoce);?>
</pre>
<?php
$parzysta=range(0,12,2);
$dziesiatki=range(-10,100,10);
$polowki=range(-5.5,5.5,0.5);
$litery_od_em=range("m","u");
$litery_wstecz=range("X","E");
?>
<pre>
   <?php foreach($parzysta as $c){
    echo $c . ' ';
  }
?></pre>
<pre>
  <?php foreach($dziesiatki as $p){
    echo $p . ' ';
  }

  ?>
  </pre>
  <pre>
   <?php foreach($polowki as $a){
    echo $a . ' ';
  }
?></pre>
<pre>
   <?php foreach($litery_od_em as $b){
    echo $b . ' ';
  }
?></pre>
<pre>
   <?php foreach($litery_wstecz as $x){
    echo $x . ' ';
  }
?></pre>
</body>
</html>