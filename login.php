<?php
session_start();
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

    if($usuario != '' && $contrasena != ''){
        $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['login'] = true;
            header("Location: pagina_principal.php");
            exit;
        } else {
            $error = "Usuario o contraseña incorrectos";
        }
    }
}
?>

<!DOCTYPE html>
<head>
    <title>Login GYM</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<form method="POST">
    <h2>Iniciar sesión</h2>
    <input type="text" name="usuario" placeholder="Usuario" required><br><br>
    <input type="password" name="contrasena" placeholder="Contraseña" required><br><br>
    <button type="submit">Entrar</button>
</form>

</body>
</html>

