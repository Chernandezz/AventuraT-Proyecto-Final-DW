<?php

require '../includes/funciones.php';
incluirTemplate('header');

?>


<section class="fondo">

    <h2 class="encabezadoCRUD">Panel de administración</h2>
    <div class="lista-botones">
        <a class="btn" href="../usuario/usuario.php" >regresar</a>
        <a class="btn" href="/admin/productos" >productos</a>
        <a class="btn" href="/admin/paquetes" >paquetes</a>
        <a class="btn" href="/admin/report.php" >Usuarios Registrados</a>
        <a class="btn" href="../usuario/cerrar_sesion.php" >Cerrar Sesión</a>
    </div>

</section>

<?php
incluirTemplate('footer');
