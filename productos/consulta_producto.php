<?php
include "../conexion.php";

$sql = "SELECT p.*, c.nombre AS categoria
        FROM producto p
        LEFT JOIN categoria c ON p.categoria_id = c.id_categoria";

$producto = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="../css/consultaP.css">
</head>
<body>

<h2>Productos del GYM</h2>

<a href="agregar_producto.php" class="btn-agregar"> Agregar producto</a>
<a class="btn-atras" href="../pagina_principal.php"> Atrás</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoría</th>
        <th>Acciones</th>
    </tr>

    <?php while ($p = mysqli_fetch_assoc($producto)) { ?>
    <tr>
        <td><?= $p['id_producto'] ?></td>
        <td><?= $p['nombre'] ?></td>
        <td><?= $p['precio'] ?></td>
        <td><?= $p['stock'] ?></td>
        <td><?= $p['categoria'] ?></td>
        <td>
            <a href="actualizar_producto.php?id=<?= $p['id_producto'] ?>" class="btn-editar">Editar</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
