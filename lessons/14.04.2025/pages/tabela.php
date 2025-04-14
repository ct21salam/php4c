<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<?php
$sql = "SELECT SYGNATURA, TYTUL, CONCAT(IMIE, ' ', NAZWISKO) AS AUTOR, DZIALY.NAZWA AS DZIAL, WYDAWNICTWO, ROK_WYD, OBJETOSC_KS, CENA FROM KSIAZKI INNER JOIN DZIALY ON KSIAZKI.ID_DZIAL = DZIALY.ID_DZIAL WHERE OBJETOSC_KS>500 ORDER BY OBJETOSC_KS";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>

    <tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Dział</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Liczba stron</th>
        <th>Cena</th>
    </tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {


    ?>

    <tr>
        <td><?= $row["SYGNATURA"]?></td>
        <td><?= $row["TYTUL"]?></td>
        <td><?= $row["AUTOR"]?></td>
        <td><?= $row["DZIAL"]?></td>
        <TD><?= $row["WYDAWNICTWO"]?></TD>
        <TD><?= $row["ROK_WYD"]?></TD>
        <TD><?= $row["OBJETOSC_KS"]?></TD>
        <TD><?= $row["CENA"]?></TD>
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