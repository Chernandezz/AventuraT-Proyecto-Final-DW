<?php
require "../../includes/config/database.php";
$db = conectarDB();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    echo "<pre>";
    var_dump($_POST['titulo']);
    echo "</pre>";

}

require '../../includes/funciones.php';
incluirTemplate('header');
?>


<section class="fondo">

    <h2 class="encabezadoCRUD">nuevo producto</h2>

    <form class="formulario formCRUD" method="POST" enctype="">
        <fieldset>
                <div class="caja">
                    <label for="titulo">titulo</label>
                    <input type="text" name="titulo" id="titulo" placeholder="titulo producto">
                </div>

                <div class="caja">
                    <label for="precio">precio</label>
                    <input type="number" name="precio" id="precio" placeholder="precio producto">
                </div>

                <div class="caja">
                    <label for="imagen">imagen</label>
                    <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">
                </div>

                <div class="caja">
                    <label for="descripcion">descripción</label>
                    <textarea name="descripcion" id="descripcion"></textarea>
                </div>

                <div class="caja">
                    <label for="cantidad">cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" placeholder="cantidad disponible" min="1">
                </div>
        </fieldset>
        <input type="submit" value="crear producto" class="btn">
    </form>

    <div class="lista-botones">
        <a class="btn" onclick="regresar()" >regresar</a>
    </div>

</section>

<?php
incluirTemplate('footer');
