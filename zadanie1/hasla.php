<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
            table {
			border-collapse: collapse;
			
			}
			th ,td { 
			padding: 5px; border: 1px solid black ;
			}
			
	</style>
</head>
<body>
    
    <?php 
    $haslo1="mbank.pl";
    $haslo2="rnbank.pl";
    
    ?>
    <table>
        <tr>
            <td><strong><?php echo $haslo1?></strong></td>
        <td><strong><?php echo $haslo2?></strong></td>
</tr>    
<tr>
    <td colspan=2><?php if($haslo1==$haslo2) echo "Hasła są takie same"; else echo "Hasła są różne"?> </td>
</tr>
        </table>
        </body>
        </html>