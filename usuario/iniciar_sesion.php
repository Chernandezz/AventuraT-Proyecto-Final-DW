<?php

require '../includes/funciones.php';
incluirTemplate('header');

if (estaAutenticado()) {
    header('Location: /usuario/usuario.php');
}

require '../includes/config/database.php';
$db = conectarDB();

// Mensaje de que se creo bien un paquete
$accion = $_GET['accion'] ?? null;

$errores = [];

$usuario = '';
$email = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
    }

    if (!$password) {
        $errores[] = "La contraseña es obligatoria";
    }

    if (empty($errores)) {
        // Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '${email}';";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            // Verificar si el password es correcto o no
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                // El usuario esta autenticado
                session_start();

                // Llenar el arreglo de la sesion
                $_SESSION['usuario'] = $usuario['usuario'];
                $_SESSION['login'] = true;
                if ($usuario['tipousuario'] == 'usuario') {
                    $_SESSION['nivel'] = 'tierra';
                } else {
                    $_SESSION['nivel'] = 'agua';

                }
                header('Location: /usuario/usuario.php');
            } else {
                // Contraseña incorrecta
                $errores = ['Contraseña Incorrecta'];
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }

}

?>


<section class="fondo">
    <h2 class="encabezadoCRUD">ingreso</h2>

    <?php if (intval($accion) === 1): ?>
        <div class="alerta exito">
            <?php echo 'usuario creado correctamente'; ?>
        </div>
    <?php endif;?>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>
    <form class="formulario formCRUD" method="POST">
        <fieldset>
                <div class="caja">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>" >
                </div>

                <div class="caja">
                    <label for="password">contraseña</label>
                    <input type="password" name="password" id="password">
                </div>
        </fieldset>
        <input type="submit" value="Ingresar" class="btn">
        <div class="textoingresar">
            <p>¿No tienes una cuenta? <a href="registrarse.php">registrarse ahora</a></p>
        </div>
    </form>
</section>

<?php
incluirTemplate('footer');