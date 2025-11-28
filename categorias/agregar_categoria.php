<?php include "../conexion.php"; ?>

<head>
    <link rel="stylesheet" href="../css/formularioC.css">
</head>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre categoría" required>
    <button type="submit">Guardar</button>
        <a class="btn-atras" href="consulta_categoria.php"> Atrás</a>
</form>

<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    mysqli_query($conn, "INSERT INTO categoria (nombre) VALUES ('$nombre')");
    header("Location: consulta_categoria.php");
}
?>
