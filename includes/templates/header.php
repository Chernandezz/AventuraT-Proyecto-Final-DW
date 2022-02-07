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
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/main.css" />
  </head>
  <body>
    <!-- Inicio Header -->
    <div class="header">
      <a href="/index.php" class="logo"> <i class="fas fa-hiking"></i> AventuraT </a>

      <nav class="navegacion">
        <div id="cerrar-nav" class="fas fa-times"></div>
        <a href="/index.php">inicio</a>
        <a href="/index.php#tienda">productos</a>
        <a href="/index.php#paquetes">paquetes</a>
        <a href="/index.php#experiencias">experiencias</a>
      </nav>

      <div class="iconos">
        <div id="btn-menu" class="fas fa-bars"></div>
        <a href="/usuario/iniciar_sesion.php" class="fas fa-user"></a>
        <a href="" class="fas fa-shopping-cart"></a>
        <div id="btn-buscar" class="fas fa-search"></div>
      </div>
    </div>
    <!-- Fin Header -->
    <!-- Inicio Buscar -->
    <div class="buscador">
      <div id="cerrar-buscador" class="fas fa-times"></div>

      <form action="">
        <input
          type="search"
          name=""
          placeholder="Buscar..."
          id="caja-buscador"
        />
        <label for="caja-buscador" class="fas fa-search"></label>
      </form>
    </div>
    <!-- Fin Buscar -->
