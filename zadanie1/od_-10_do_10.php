<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>p{
        font-size:24px;
        padding-top:10px;
        padding-bottom:10px;
        text-shadow: 1px 1px 5px forestgreen;
        
    }
    </style>
</head>
<body>

    <p style="color:yellowgreen; border-top: 10px double; border-bottom: 10px double;"><?php for ($i=-10; $i<=10; $i++)
    {
        if ($i==10) {
            echo " $i.";
        }
        else
        {echo " $i,";
        }
        
        
    }
    
    ?>
    </p>
</body>
</html>