<?php
include "../conexion.php";
$categoria = mysqli_query($conn, "SELECT * FROM categoria");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="../css/formularioP.css">
</head>
<body>

<form method="POST">
    <h2>Agregar Producto</h2>

    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" name="precio" placeholder="Precio" required>
    <input type="number" name="stock" placeholder="Stock" required>

    <select name="categoria_id" required>
        <option value="">Seleccione categoría</option>
        <?php while ($c = mysqli_fetch_assoc($categoria)) { ?>
            <option value="<?= $c['id_categoria'] ?>"><?= $c['nombre'] ?></option>
        <?php } ?>
    </select>

    <button type="submit">Guardar</button>
    <a class="btn-atras" href="consulta_producto.php"> Atrás</a>

</form>

<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $cat = $_POST['categoria_id'];

    mysqli_query($conn,
        "INSERT INTO producto (nombre, precio, stock, categoria_id)
         VALUES ('$nombre', '$precio', '$stock', '$cat')");

    echo "<script>
            alert('Producto guardado correctamente');
            window.location='consulta_producto.php';
          </script>";
}
?>

</body>
</html>

