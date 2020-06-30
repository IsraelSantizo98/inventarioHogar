<?php 
include '../../php/conexion.php';
$id_categoria = $_GET['categorias'];
$instruc = "DELETE FROM categorias WHERE id_categoria = $id_categoria";
$query = mysqli_query($inventario_conexion, $instruc);
?>