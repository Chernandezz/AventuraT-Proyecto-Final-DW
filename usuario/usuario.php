<?php

require '../includes/funciones.php';
incluirTemplate('header');

if (!estaAutenticado()) {
    header('Location: /usario/iniciar_sesion.php');
}

require '../includes/config/database.php';
$db = conectarDB();
$usuario = $_SESSION['usuario'];

$query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

$resultado = mysqli_query($db, $query);

$resultado = mysqli_fetch_assoc($resultado);

?>

<section class="pagina-usuario">
    <div class="imagenes">
        <div class="usuario">
            <img src="/img/perfilEstandar.jpeg" alt="" />
            <div class="info">

                <h2><?php echo $resultado['usuario'] ?></h2>
                <?php if ($resultado['tipousuario'] == 'admin'): ?>
                    <h3>elemento: Agua <i class="fas fa-tint"></i></h3>
                <?php else: ?>
                    <h3>elemento: Fuego <i class="fas fa-fire"></i></h3>
                <?php endif;?>
            </div>
        </div>
        <a class="btn-cerrar-sesion" href="cerrar_sesion.php"><i class="fas fa-power-off"></i></a>
    </div>
        <form class="formulario" method="" enctype="">
            <fieldset>
                <legend class="encabezado">Información personal</legend>
                    <div class="caja">
                        <label for="usuario">usuario</label>
                        <input type="text" name="usuario" id="usuario" value="<?php echo $resultado['usuario'] ?>" disabled style="text-transform: capitalize;">
                    </div>

                    <div class="caja">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email" value="<?php echo $resultado['email'] ?>" disabled >
                    </div>
            </fieldset>

            <?php if ($resultado['tipousuario'] == 'admin'): ?>
                <a href="../admin/index.php" class="btn">Panel de administración</a>
            <?php endif;?>
        </form>

</section>

<?php
incluirTemplate('footer');
?>
