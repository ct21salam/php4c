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

        td {
            border: 1px solid lightgray;
            padding: 5px;
        }

        .przycisk {
            margin: 0 auto;
            display:block;
        }
    </style>
</head>
<body>
<table>
        <caption>Terminy</caption>
        <label for=""></label>
        <?php
        for ($n = 1; $n < 50; $n++) {
            echo "<tr>";
            echo "<td>" . '<label for=' . $n . '>' . "Termin $n" . '</label>' . "</td>";
            echo "<td>" . '<input type="date"  . " name="' . $n . '" id="' . $n . '">' . "</td>";
            echo "</tr>";
        }
        ?>
        
            <td colspan="2" ><input type="submit" value="Zatwierdź" class="przycisk"></td>
        


    </table>
</body>
</html>