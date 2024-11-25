<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{text-allign:center; }

        fieldset{color:darkgreen }

        </style>
</head>
<body>
    <?php
    $r=6;
    ?>
    <fieldset>
    <p>Pole koła o promieniu 6 jest równe: <?php echo round(pi()*$r**2,3)?>j<sup>2</sup></p>
</fieldset>
</body>
</html>
