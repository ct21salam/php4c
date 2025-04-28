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
    <h1>Tabela stanowiska<h1>
</body>
</html>
<table>
<?php
$sql = "SELECT * from stanowiska ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Id_stanowisko</th>
        <th>Nazwa</th>
        
        
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {


    ?>

    <tr>
        <td><?= $row["Id_stanowisko"]?></td>
        <td><?= $row["Nazwa"]?></td>
        
       
    </tr>

    <?php
  }
} else {
  echo "ni ma";
}

mysqli_close($conn);
?>
</table>