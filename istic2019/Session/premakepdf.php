<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Istic2019</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

<div class="container">
         
      <form action="makepdf.php" method="post"> 

     
            <br>
            <br>
            <a href="../paginas/facturar.php"><h4>Facturar Otro Vehiculo</h4></a>
            <a href="../index.php"><h4>Volver al Inicio</h4></a>
            <a href="../makepdf.php"><h4>Descargar PDF</h4></a>

      </form>
    </div>
  </body>
  </html>
  