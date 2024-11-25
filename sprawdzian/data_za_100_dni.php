<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style=color:chocolate; border-color:chocolate;>
        <legend>Dzisiejsza data</legend>
        <P><?php echo date('d:m:y');?><p>
</fieldset>
<fieldset style=color:darkgoldenrod;  border-color:darkgoldenrod;>
    <legend>Data za 100 dni</legend>
    <p><?php echo date('d:m:y',strtotime("+2400 hours"))?><p>
</fieldset>



</body>
</html>