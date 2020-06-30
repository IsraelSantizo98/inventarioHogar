<?php 
include '../../php/conexion.php';
$idFabricante = $_POST['idFabricante'];
$nombreFabricante =$_POST['nombreFabricante'];
$instruc = "UPDATE fabricantes SET nombre_fabricante = '$nombreFabricante' WHERE id_Fabricante = $idFabricante";
$query = mysqli_query($inventario_conexion, $instruc);
?>