<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: 220px;
            font-weight: bold;
            text-align: center;
        }
        </style>
</head>
<body>
<?php
if(date('s')%2==0)
{
    $color='red';
}
else{
    $color='blue';
}


?>

   

<p style="color:<?php echo $color?>; border: 20px solid  <?php echo $color?>"><?php echo date('G:i:s');?>
</p>


</body>
</html>