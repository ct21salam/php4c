<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{ border:1px solid black;
            color:red;
            background-color:gray;
       }
       .plik{
        color:aqua;
       }
        </style>
        </head>
<body>
    <?php
    $do_przeszukania='skanowanie';
    $pliki=scandir($do_przeszukania);
    ?>
    <fieldset>
        <div>Pliki w katalogu <span><?php $do_przeszukania ?></span></div>
        <br>
        <div><?php
        foreach($pliki as $plik){
            if($plik!='.' && $plik !='..'){
                ?> <div class="plik"><?= $plik?> </div>
                <div><?php ?></div> <?php
            }







        }?>
        </div>
        </fieldset>
</body>
</html>