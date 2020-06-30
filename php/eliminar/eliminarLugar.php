<?php 
include '../../php/conexion.php';
$id_lugar_de_compra  = $_GET['lugares'];
$instruc = "DELETE FROM lugares_de_compras WHERE id_lugar_de_compra = $id_lugar_de_compra";
$query = mysqli_query($inventario_conexion, $instruc);
?>