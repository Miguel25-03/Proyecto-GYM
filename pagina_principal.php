<?php
session_start();
if (!isset($_SESSION['login'])) header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Administrador</title>
    <link rel="stylesheet" href="css/panel.css">
</head>
<body>

<div class="panel">
<h1>Panel de Control</h1>

    <a href="productos/consulta_producto.php">Gestionar Productos</a><br><br>
    <a href="categorias/consulta_categoria.php">Gestionar Categorías</a><br><br>
    <a href="login.php">Cerrar Sesión</a>
</div>

</body>
</html>


