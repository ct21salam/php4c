<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'db/connect.php'; ?><!-- połączenie z bazą danych -->
    <div wyrównany do lewej>
	<!-- tu są linki -->
    </div>

    <div wyrównwny do prawej>
 	<!-- tu dołączana jest jedna podstrona (z wielu możliwych) -->
	<!-- o tym, która podstrona będzie dołączona decyduje link (a dokładniej parametr w linku) -->
    </div>
    <?php require 'db/disconnect.php'; ?><!-- rozłączenie z bazą danych -->
</body>
</html>