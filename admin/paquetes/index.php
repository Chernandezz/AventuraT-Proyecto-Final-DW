<?php

require '../../includes/config/database.php';
require '../../includes/funciones.php';

$db = conectarDB();

// Escribimos el query
$query = "SELECT * FROM paquetes";

// Consultar la BD
$resultado = mysqli_query($db, $query);

// Mensaje de que se creo bien un paquete
$accion = $_GET['accion'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        // Eliminar el archivo
        $query = "SELECT imagen FROM paquetes WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
        $resultado = mysqli_fetch_assoc($resultado);
        $nombreImagen = $resultado['imagen'];

        unlink('../../imagenes/' . $nombreImagen);

        // Eliminar la propiedad
        $query = "DELETE FROM paquetes WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            header("Location: /admin/paquetes?accion=3");
        }
    }
}

incluirTemplate('header');
?>


<section class="fondo">

    <h2 class="encabezadoCRUD">administración paquetes</h2>
    <?php if (intval($accion) === 1): ?>
        <div class="alerta exito">
            <?php echo 'paquete creado correctamente'; ?>
        </div>
    <?php elseif ((intval($accion) === 2)): ?>
        <div class="alerta exito">
            <?php echo 'paquete actualizado correctamente'; ?>
        </div>
    <?php elseif ((intval($accion) === 3)): ?>
        <div class="alerta exito">
            <?php echo 'paquete eliminado correctamente'; ?>
        </div>
    <?php endif;?>
    <div class="lista-botones">
        <a class="btn" href="/admin" >regresar</a>
        <a class="btn" href="/admin/paquetes/crear.php" >nuevo paquete</a>
    </div>

    <table class="tabla-productos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>titulo</th>
                    <th>precio</th>
                    <th>imagen</th>
                    <th>descripción</th>
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

                    <td> <img class="imagen-tabla" src="/imagenes/<?php echo $item['imagen']; ?>" alt=""> </td>
                    <td class="acciones-crud">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">

                            <input type="submit" value="Eliminar">
                        </form>
                        <a href="/admin/paquetes/actualizar.php?id=<?php echo $item['id']; ?>">Editar</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>

</section>

<?php
incluirTemplate('footer');