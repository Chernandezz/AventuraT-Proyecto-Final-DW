<?php

require '../includes/config/database.php';
$db = conectarDB();

require '../includes/funciones.php';
incluirTemplate('header');

$errores = [];

$usuario = '';
$email = '';
$password = '';
$cpassword = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $usuario = mysqli_real_escape_string($db, $_POST['usuario']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
    $tipousuario = $_POST['tipousuario'];

    if (!$usuario) {
        $errores[] = "El usuario es obligatorio";
    }

    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
    }

    if (!$password) {
        $errores[] = "La contraseña es obligatoria";
    }

    if (!$cpassword) {
        $errores[] = "Repetir la contraseña es obligatorio";
    }

    if ($cpassword and $password != $cpassword) {
        $errores[] = "Las contraseñas no coinciden";
    }

    if (empty($errores)) {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        // Revisar si el usuario existe
        $query = "INSERT INTO usuarios (email, password, usuario, tipousuario) VALUES ('$email', '$passwordHash', '$usuario', '$tipousuario');";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al Usuario
            header("Location: /usuario/iniciar_sesion.php?accion=1");
        }

    }

}

?>


<section class="fondo">
    <h2 class="encabezadoCRUD">registro</h2>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>

    <form class="formulario formCRUD" method="POST">
        <fieldset>
                <div class="caja">
                    <label for="usuario">usuario</label>
                    <input type="text" name="usuario" id="usuario" value="<?php echo $usuario ?>">
                </div>

                <div class="caja">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>">
                </div>

                <div class="caja">
                    <label for="password">contraseña</label>
                    <input type="password" name="password" id="password" value="<?php echo $password ?>">
                </div>

                <div class="caja">
                    <label for="cpassword">confirmar contraseña</label>
                    <input type="password" name="cpassword" id="cpassword" value="<?php echo $cpassword ?>">
                </div>

                <div class="caja">
                    <label for="tipousuario">tipo usuario</label>
                    <select name="tipousuario" id="tipousuario">
                        <option value="usuario" selected>Usuario</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
        </fieldset>
        <input type="submit" value="registrarse" class="btn">
        <div class="textoingresar">
            <p>¿Ya tienes una cuenta? <a href="iniciar_sesion.php">ingresar ahora</a></p>
        </div>
    </form>
</section>

<?php
incluirTemplate('footer');