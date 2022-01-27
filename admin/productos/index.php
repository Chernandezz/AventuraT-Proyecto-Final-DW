<?php
require '../../includes/funciones.php';
incluirTemplate('header');
?>


<section class="fondo">

    <h2 class="encabezadoCRUD">administración productos</h2>
    <div class="lista-botones">
        <a class="btn" onclick="regresar()" >regresar</a>
        <a class="btn" href="/admin/productos/crear.php" >nuevo producto</a>
    </div>

</section>

<?php
incluirTemplate('footer');