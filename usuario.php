<?php include 'includes/templates/header.php';?>

<section class="pagina-usuario">
    <div class="imagenes">
        <div class="usuario">
            <img src="img/pic-1.png" alt="" />
            <div class="info">

                <h2>Lucas Hernandez</h2>
                <h3>elemento: Agua <i class="fas fa-tint"></i></h3>
            </div>
        </div>
    </div>
        <form class="formulario" method="" enctype="">
            <fieldset>
                <legend class="encabezado">Información personal</legend>
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
            <input type="submit" value="Actualizar Información" class="btn">
        </form>

</section>

<?php include 'includes/templates/footer.php';?>
