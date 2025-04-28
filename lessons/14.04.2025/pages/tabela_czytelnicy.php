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
    <h1>Tabela czytelnicy<h1>
    <table>
<?php
$sql = "SELECT Nr_czytelnika, Nazwisko, Imie, Data_ur , Ulica, Kod, Miasto, Data_zapisania, Data_skreslenia, Nr_legitymacji, Plec from czytelnicy";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Nr_czytelnika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Data_ur</th>
        <th>Ulica</th>
        <th>Kod</th>
        <th> Miasto</th>
        <th>Data_zapisania</th>
        <th>Data_skreslenia</th>
        <th>Nr_legitymacji</th>
        <th>Plec</th>
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {


    ?>

    <tr>
        <td><?= $row["Nr_czytelnika"]?></td>
        <td><?= $row["Nazwisko"]?></td>
        <td><?= $row["Imie"]?></td>
        <td><?= $row["Data_ur"]?></td>
        <TD><?= $row["Ulica"]?></TD>
        <TD><?= $row["Kod"]?></TD>
        <TD><?= $row["Miasto"]?></TD>
        <TD><?= $row["Data_zapisania"]?></TD>
        <TD><?= $row["Data_skreslenia"]?></TD>
        <TD><?= $row["Nr_legitymacji"]?></TD>
        <TD><?= $row["Plec"]?></TD>
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