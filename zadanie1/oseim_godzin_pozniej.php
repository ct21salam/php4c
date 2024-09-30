<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   
<h3>Aktualna godzina</h3>
<?php echo date('G:i:s');?><br>
<h3>Osiem godzin później</h3>
<?php echo date('G:i:s',strtotime("+8 hours"))?>

</body>
</html>