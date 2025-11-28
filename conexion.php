<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "GYM";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error al conectar: " . mysqli_connect_error());
}
?>
