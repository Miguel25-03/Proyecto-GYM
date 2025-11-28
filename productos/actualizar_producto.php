<?php
include "../conexion.php";

$id = $_GET['id'];
$categoria = mysqli_query($conn, "SELECT * FROM categoria");

$producto = mysqli_fetch_assoc(mysqli_query($conn,
    "SELECT * FROM producto WHERE id_producto=$id"));
?>
<head>
    <link rel="stylesheet" href="../css/actualizarP.css">
</head>
<form method="POST">
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required><br>
    <input type="number" name="precio" value="<?= $producto['precio'] ?>" required><br>
    <input type="number" name="stock" value="<?= $producto['stock'] ?>" required><br>

    <select name="categoria_id">
        <?php while ($c = mysqli_fetch_assoc($categoria)) { ?>
            <option value="<?= $c['id_categoria'] ?>"
                <?= $c['id_categoria'] == $producto['categoria_id'] ? 'selected' : '' ?>>
                <?= $c['nombre'] ?>
            </option>
        <?php } ?>
    </select><br><br>

    <button type="submit">Actualizar</button>

    <a class="btn-atras" href="consulta_producto.php"> Atrás</a>
</form>

<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $cat = $_POST['categoria_id'];

    mysqli_query($conn,
        "UPDATE producto SET nombre='$nombre', precio='$precio', stock='$stock', categoria_id='$cat'
         WHERE id_producto=$id");

    header("Location: consulta_producto.php");
}
?>
