<?php

require '../../includes/config/database.php';
require '../../includes/funciones.php';

$db = conectarDB();

// Escribimos el query
$query = "SELECT * FROM productos";

// Consultar la BD
$resultado = mysqli_query($db, $query);

// Mensaje de que se creo bien un producto
$accion = $_GET['accion'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        // Eliminar el archivo
        $query = "SELECT imagen FROM productos WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
        $resultado = mysqli_fetch_assoc($resultado);
        $nombreImagen = $resultado['imagen'];

        unlink('../../imagenes/' . $nombreImagen);

        // Eliminar la propiedad
        $query = "DELETE FROM productos WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            header("Location: /admin/productos?accion=3");
        }
    }
}

incluirTemplate('header');
?>


<section class="fondo">

    <h2 class="encabezadoCRUD">administración productos</h2>
    <?php if (intval($accion) === 1): ?>
        <div class="alerta exito">
            <?php echo 'producto creado correctamente'; ?>
        </div>
    <?php elseif ((intval($accion) === 2)): ?>
        <div class="alerta exito">
            <?php echo 'producto actualizado correctamente'; ?>
        </div>
    <?php elseif ((intval($accion) === 3)): ?>
        <div class="alerta exito">
            <?php echo 'producto eliminado correctamente'; ?>
        </div>
    <?php endif;?>
    <div class="lista-botones">
        <a class="btn" href="/admin" >regresar</a>
        <a class="btn" href="/admin/productos/crear.php" >nuevo producto</a>
        <a class="btn" href="/admin/productos/ingresos.php" >ingresos</a>
    </div>

    <table class="tabla-productos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>titulo</th>
                    <th>precio</th>
                    <th>imagen</th>
                    <th>descripción</th>
                    <th>cantidad</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody> <!-- Mostrar Los Resultados -->
            <?php while ($item = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['titulo']; ?></td>
                    <td>$<?php echo round($item['precio'], 0); ?></td>
                    <td><?php echo $item['descripcion']; ?></td>
                    <td><?php echo $item['cantidad']; ?></td>

                    <td> <img class="imagen-tabla" src="/imagenes/<?php echo $item['imagen']; ?>" alt=""> </td>
                    <td class="acciones-crud">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">

                            <input type="submit" value="Eliminar">
                        </form>
                        <a href="/admin/productos/actualizar.php?id=<?php echo $item['id']; ?>">Editar</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>

</section>

<?php
incluirTemplate('footer');
