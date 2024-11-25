<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            border-top:4px dotted pink; text-align:center;font-family:cursive;
            border-bottom:4px dotted pink; text-align:center;font-family:cursive;
        }
        h3{
            border-top:4px dashed pink; text-align:center;font-family:cursive;
            border-bottom:4px dashed pink; text-align:center;font-family:cursive;

        }
    </style>
</head>
<body>
    <h2 style="color:darkorchid;">
    <?php 
    $miesiac=RAND(1, 15);
    
    ?>
    <h1>
    <?php echo $miesiac ?>
</h1>
<h3>
<?php
switch ($miesiac) {
    case 1:
        case 2:
            case 3:
        echo "Pierwszy kwartał roku";
        break;
            }
            ?>
<?php
switch ($miesiac) {
    case 4:
        case 5:
            case 6:
        echo "Drugi kwartał roku";
        break;
            }
            ?>
<?php
switch ($miesiac) {
    case 7:
        case 8:
            case 9:
        echo "Trzeci kwartał roku";
        break;
            }
            ?>                        
<?php
switch ($miesiac) {
    case 10:
        case 11:
            case 12:
        echo "Czwarty kwartał roku";
        break;
            }
            ?>            
            <?php
switch ($miesiac) {
    case 13:
        case 14:
            case 15:
        echo "Błędny numer miesiaca";
        break;
            }
            
            ?>
            </h3>
            </body>
            </html>
        