<?php 
include '../../php/conexion.php';
$id_fabricante  = $_GET['fabricantes'];
$instruc = "DELETE FROM fabricantes WHERE id_fabricante = $id_fabricante";
$query = mysqli_query($inventario_conexion, $instruc);
?>