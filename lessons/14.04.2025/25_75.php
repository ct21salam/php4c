<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
 
}

.left {
  width: 25%;
  color:white;
  background-color:green;
  height:500px;
}

.right {
  width: 75%;
  color:white;
  background-color:blue;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a{
  display:block;
 text-decoration:none;
 color:white;
padding:5px;
}
a:hover{
  background-color:orange;
}
.active{
  background: yellow;
}
</style>
</head>
<body>
<?php include 'db/connect.php' ?>
<h2>Two Unequal Columns</h2>

<div class="row">
  <div class="column left">
    <h2>Wybór</h2>
    <p></p>
    <a class="<?= ($_GET['page'] ?? '') == 'glowna' ? 'active' : '' ?>" href="25_75.php?page=glowna">Strona główna</a>
    <a class="<?= ($_GET['page'] ?? '') == 'jeden' ? 'active' : '' ?>" href="25_75.php?page=jeden">Pierwsza strona</a>
    <a class="<?= ($_GET['page'] ?? '') == 'tabela_ksiazki' ? 'active' : '' ?>" href="25_75.php?page=tabela_ksiazki
    ">Tabela książki</a>
    <a class="<?= ($_GET['page'] ?? '') == 'tabela_dzialy' ? 'active' : '' ?>" href="25_75.php?page=tabela_dzialy
    ">Tabela działy</a>
    <a class="<?= ($_GET['page'] ?? '') == 'tabela_czytelnicy' ? 'active' : '' ?>" href="25_75.php?page=tabela_czytelnicy
    ">Tabela czytelnicy</a>
    <a class="<?= ($_GET['page'] ?? '') == 'tabela_pracownicy' ? 'active' : '' ?>" href="25_75.php?page=tabela_pracownicy
    ">Tabela pracownicy</a>
    <a class="<?= ($_GET['page'] ?? '') == 'tabela_stanowiska' ? 'active' : '' ?>" href="25_75.php?page=tabela_stanowiska
    ">Tabela stanowsika</a>
    <a class="<?= ($_GET['page'] ?? '') == 'tabela_wypozyczenia' ? 'active' : '' ?>" href="25_75.php?page=tabela_wypozyczenia
    ">Tabela wypożyczenia</a>
  </div>
  <div class="column right" >
    
    <?php  
      if (isset($_GET['page']))
        {
            if (file_exists('pages/' . $_GET['page'] . '.php'))
            {
                include 'pages/' . $_GET['page'] . '.php';
            }
            else
            {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
        }
        else
        {
            include 'pages/glowna.php';
        }
    ?>
  </div>
</div>

</body>
</html>
