<?php

require '../includes/funciones.php';
incluirTemplate('header');

?>


<section class="fondo">

    <h2 class="encabezadoCRUD">Panel de administración</h2>
    <div class="lista-botones">
        <a class="btn" onclick="regresar()" >regresar</a>
        <a class="btn" href="/admin/productos" >productos</a>
        <a class="btn" href="#" >paquetes</a>
        <a class="btn" href="#" >Cerrar Sesión</a>
    </div>

</section>

<?php
incluirTemplate('footer');
