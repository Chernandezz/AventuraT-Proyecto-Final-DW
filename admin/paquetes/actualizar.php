<?php
require '../../includes/funciones.php';
incluirTemplate('header');

// Recoger ID de la URL
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

// Validamos que sea un id valido
if (!$id) {
    header("Location: /admin/paquetes");
}

// Conectamos a la BD
require "../../includes/config/database.php";
$db = conectarDB();

// query para obtener los datos del paquete
$query = "SELECT * FROM paquetes WHERE id = ${id}";
$resultado = mysqli_query($db, $query);

$item = mysqli_fetch_assoc($resultado);

$errores = [];
$titulo = $item['titulo'];
$precio = $item['precio'];
$descripcion = $item['descripcion'];
$nombreImagen = $item['imagen'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    if (empty($errores)) {

        // Subida de archivos

        // Crear Carpeta

        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        if ($imagen['name']) {
            // Elimina la imagen previa

            unlink($carpetaImagenes . $nombreImagen);

            // Generar un nombre unico
            $nombreImagen = md5(uniqid('')) . '.png';

            // Subir Imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        }

        // Insertar en la base de datos
        $query = "UPDATE paquetes SET titulo = '${titulo}', precio = ${precio}, imagen = '${nombreImagen}', descripcion = '${descripcion}' WHERE id = ${id}";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al Usuario
            header("Location: /admin/paquetes?accion=2");
        }

    }

}

?>


<section class="fondo">

    <h2 class="encabezadoCRUD">actualizar</h2>

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
                    <div class="admin-imagenes">
                        <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">
                        <img src="../../imagenes/<?php echo $item['imagen'] ?>" alt="imagen">
                    </div>
                </div>

                <div class="caja">
                    <label for="descripcion">descripción</label>
                    <textarea name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
                </div>
        </fieldset>
        <input type="submit" value="actualizar paquete" class="btn">
    </form>

    <div class="lista-botones">
        <a class="btn" href="/admin/paquetes" >regresar</a>
    </div>

</section>

<?php
incluirTemplate('footer');