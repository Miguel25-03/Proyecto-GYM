<?php
include "../conexion.php";
$categorias = mysqli_query($conn, "SELECT * FROM categoria");
?>

<head>
    <link rel="stylesheet" href="../css/consultaC.css">
</head>
<h2>Categorías</h2>
<a href="agregar_categoria.php">Agregar categoría</a><br><br>
        <a class="btn-atras" href="../pagina_principal.php"> Atrás</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Estado</th>
    <th>Acciones</th>
</tr>

<?php while ($c = mysqli_fetch_assoc($categorias)) { ?>
<tr>
    <td><?= $c['id_categoria'] ?></td>
    <td><?= $c['nombre'] ?></td>
    <td><?= $c['estado'] ?></td>
    <td>
        <a href="actualizar_categoria.php?id=<?= $c['id_categoria'] ?>">Editar</a>
    </td>
</tr>
<?php } ?>
</table>
