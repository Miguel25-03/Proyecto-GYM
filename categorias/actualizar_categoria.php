<?php
include "../conexion.php";
$id = $_GET['id'];
$c = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM categoria WHERE id_categoria=$id"));
?>

<head>
    <link rel="stylesheet" href="../css/actualizarC.css">
</head>
<form method="POST">
    <input type="text" name="nombre" value="<?= $c['nombre'] ?>" required>
    <button type="submit">Actualizar</button>
            <a class="btn-atras" href="consulta_categoria.php"> Atrás</a>
</form>

<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    mysqli_query($conn, "UPDATE categoria SET nombre='$nombre' WHERE id_categoria=$id");
    header("Location: consulta_categoria.php");
}
?>
