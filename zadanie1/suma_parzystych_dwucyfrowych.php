<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size:large;
            font-family:arial;
            color:cornflowerblue;
            text-shadow: 1px 1px  blue;
        }
        </style>
</head>
<body>
    <p>
    <?php
    for($i=10;$i<=99;$i++){
if($i%2==0)
echo "$i | ";

    }?>
</p>

</body>
</html>