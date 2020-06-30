<?php 
include '../conexion.php';
$nombreCategoria = $_POST['nombreCategoria'];
$descripcionCategoria = $_POST['descripcionCategoria'];
$emailCategoria = $_POST['emailCategoria'];
$intruc = "INSERT INTO categorias VALUES(null, '$nombreCategoria', '$descripcionCategoria', '$emailCategoria')";
$insertarCategoria = mysqli_query($inventario_conexion, $intruc);
?>