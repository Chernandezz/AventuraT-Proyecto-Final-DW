<?php
require '../../includes/funciones.php';
incluirTemplate('header');
?>


<section class="fondo">

    <h2 class="encabezadoCRUD">nuevo producto</h2>

    <form class="formulario" method="" enctype="">
        <fieldset>
                <div class="caja">
                    <label for="nombre">nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Lucas Hernandez" value="" disabled>
                </div>

                <div class="caja">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" placeholder="cristianfzhernandez@gmail.com" disabled>
                </div>

                <div class="caja">
                    <label for="direccion">direccion</label>
                    <input type="text" name="direccion" id="direccion" placeholder="Bajo Tablazo casa 120" disabled>
                </div>

                <div class="caja">
                    <label for="cedula">cedula</label>
                    <input type="text" name="cedula" id="cedula" placeholder="1002634007" disabled>
                </div>
        </fieldset>
        <input type="submit" value="crear" class="btn">
    </form>

    <div class="lista-botones">
        <a class="btn" onclick="regresar()" >regresar</a>
    </div>

</section>

<?php
incluirTemplate('footer');
