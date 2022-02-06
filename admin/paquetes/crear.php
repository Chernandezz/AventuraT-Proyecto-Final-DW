<?php
require "../../includes/config/database.php";
$db = conectarDB();

$errores = [];

$titulo = "";
$precio = "";
$descripcion = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

    // Asignar super globlar $_FILES a una variable
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = 'el titulo es requerido';
    }
    if (!$precio) {
        $errores[] = 'el precio es requerido';
    }

    // Validacion Imagen
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = 'la imagen es requerida';
    }

    //  Revisar que el arreglo de errores este vacio

    if (empty($errores)) {

        // Subida de archivos

        // Crear Carpeta

        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        // Generar un nombre unico
        $nombreImagen = md5(uniqid('')) . '.png';

        // Subir Imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

        // Insertar en la base de datos
        $query = "INSERT INTO paquetes (titulo, precio, imagen, descripcion) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion');";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al Usuario
            header("Location: /admin/paquetes?accion=1");
        }
    }

}

require '../../includes/funciones.php';
incluirTemplate('header');
?>


<section class="fondo">

    <h2 class="encabezadoCRUD">nuevo paquete</h2>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>

    <form class="formulario formCRUD" method="POST" enctype="multipart/form-data">
        <fieldset>
                <div class="caja">
                    <label for="titulo">titulo</label>
                    <input type="text" name="titulo" id="titulo" placeholder="titulo paquete" value="<?php echo $titulo ?>">
                </div>

                <div class="caja">
                    <label for="precio">precio</label>
                    <input type="number" name="precio" id="precio" placeholder="precio paquete" value="<?php echo $precio ?>">
                </div>

                <div class="caja">
                    <label for="imagen">imagen</label>
                    <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">
                </div>

                <div class="caja">
                    <label for="descripcion">descripción</label>
                    <textarea name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
                </div>
        </fieldset>
        <input type="submit" value="crear paquete" class="btn">
    </form>

    <div class="lista-botones">
        <a class="btn" href="/admin/paquetes" >regresar</a>
    </div>

</section>

<?php
incluirTemplate('footer');