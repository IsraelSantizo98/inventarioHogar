<?php 
include '../conexion.php';
$nameFabricante = $_POST['nameFabricante'];
$instrucInsertarFabricanete = "INSERT INTO fabricantes VALUES (NULL, '$nameFabricante')";
$insertarFabricante = mysqli_query($inventario_conexion, $instrucInsertarFabricanete);
?>