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
  height: 300px; /* Should be removed. Only for demonstration */
}

.left {
  width: 25%;
  color:white;
  background-color:green;
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
</style>
</head>
<body>
<?php include 'db/connect.php' ?>
<h2>Two Unequal Columns</h2>

<div class="row">
  <div class="column left">
    <h2>Column 1</h2>
    <p>Some text..</p>
    <a href="25_75.php?page=glowna">Strona główna</a>
    <a href="25_75.php?page=jeden">Pierwsza strona</a>
    <a href="25_75.php?page=tabela">tabela</a>
  </div>
  <div class="column right" >
    <h2>Column 2</h2>
    <p>Some text..
    </p>
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
