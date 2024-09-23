<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   <meta name="vievport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
  
    <?php $title = "Pierwsza strona z PHP-em" ; ?>
    <?php $link1 = "https://www.wp.pl/" ; ?>
    <?php $link2 = "https://www.onet.pl/" ; ?>
    <?php $link3 = "https://www.interia.pl/" ; ?>

    <h1> <?= $title?> </h1>
    <ol style="list-style-type: decimal-leading-zero">
        <li> <a href="<?=$link1 ?>" WirtualnaPolska </a> </li>
        <li> <a href="<?=$link2 ?>" Onet </a> </li>
        <li> <a href="<?=$link3 ?>" Interia </a> </li>

</ol>
</body>
</html>