<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        table,td,tr{
            border:1px solid black;
            font-size:14px;
            border-collapse:collapse;
        }
        </style>
</head>
<body>
    <h1>Tabela działy<h1>
<table>
    <?php
$sql = "SELECT Id_dzial, Nazwa  from dzialy";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Id_dzial</th>
        <th>Nazwa</th>
       <th> <a href="25_75.php?page=robienie">-</a></th>
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {


    ?>

    <tr>
        <td><?= $row["Id_dzial"]?></td>
        <td><?= $row["Nazwa"]?></td>
        <td><a href="25_75.php?page=edycja&id=<?= $row["Id_dzial"]?>&dzialy=<?= $row["Nazwa"]?>">Edycja</a></td>
    </tr>

    <?php
  }
} else {
  echo "ni ma";
}

mysqli_close($conn);
?>
</table>
</body>
</html>