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
    <h1>Tabela wypożyczenia<h1>
        <table>
    <?php
$sql = "SELECT * from wypozyczenia ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Nr_transakcji</th>
        <th>Sygnatura</th>
        <th>Id_pracownika</th>
        <th>Nr_czytelnika</th>
        <th>Data_wypozyczenia</th>
        <th>Data_zwrotu</th>
       
        
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {


    ?>

    <tr>
        <td><?= $row["Nr_transakcji"]?></td>
        <td><?= $row["Sygnatura"]?></td>
        <td><?= $row["Id_pracownika"]?></td>
        <td><?= $row["Nr_czytelnika"]?></td>
        <TD><?= $row["Data_wypozyczenia"]?></TD>
        <TD><?= $row["Data_zwrotu"]?></TD>
        
       
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