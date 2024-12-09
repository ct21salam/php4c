<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            list-style:upper-roman;
        }
        </style>
</head>
<body>
   
    
    <ol>
    <?php
    $numbers= array(rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99));
    rsort($numbers);
foreach($numbers as $d){?>
    
<li><?php echo $d ?></li>
<?php }
?>

    </ol>
</body>
</html>