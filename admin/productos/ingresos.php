<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aventura</title>
    <!-- Link Iconos Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/main.css" />
    <style type="text/css" media="print">
        @media print{
            #noprint{
                display: none !important;
            }
        }
    </style>
  </head>
  <body onload="print()">
    <center>
        <a href="/index.php" class="logo"> <i class="fas fa-hiking"></i> AventuraT </a>
    </center>
    <div class="container">
        <center>
            <h3 style="margin-top:30px;">Ingresos</h3>
            <hr>
        </center>
        <table id="ready" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>descripcion</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
$total = 0;
require "../../includes/config/database.php";
$db = conectarDB();
$get_product_list = mysqli_query($db, "SELECT *from productos");

while ($row = mysqli_fetch_array($get_product_list)) {
    ?>
                <?php
$subt = $row['cantidad'] * $row['precio'];
    $total = $total + $subt; ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['titulo'] ?></td>
                    <td><?php echo $row['cantidad'] ?></td>
                    <td><?php echo $row['precio'] ?></td>
                    <td><?php echo $row['descripcion'] ?></td>
                    <td><?php echo $subt ?></td>
                </tr>
                <?php
}?>
            </tbody>
        </table>
        <h2 style=text-align:center;>El total es: $<?php echo $total ?></h2>
    </div>
    <div class="container">
        <button type="" class="btn btn-info noprint" id="noprint" style="width:100%" onclick="window.location.replace('index.php');">Cancelar impresion</button>
  </body>
