<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border:2px solid dodgerblue;
            padding-top:10px;
            padding-bottom:10px;
           text-align:center;
           color:blue;
        }
        </style>
</head>
<body>
<?php
$a=range(0,10);
shuffle($a)

?>
<table  style="background-color:aliceblue;border: 1px solid dodgerblue;border-collapse:collapse; padding-top:10px; padding-bottom:10px; width:100%; table-layout:fixed;">
    <tr>
        
   <?php foreach($a as $c){?>
    <td><?php echo $c ;
  }?></td>


</tr>
</table>
</body>
</html>