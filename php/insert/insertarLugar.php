<?php
include '../conexion.php'; 
$nombreLugar = $_POST['nombreLugar'];
$cuidadLugar = $_POST['cuidadLugar'];
$telefonoLugar = $_POST['telefonoLugar'];
$emailLugar = $_POST['emailLugar'];
$instrucLugar = "INSERT INTO lugares_de_compras VALUES(NULL, '$nombreLugar', '$cuidadLugar', '$telefonoLugar', '$emailLugar')";
$insertarLugar = mysqli_query($inventario_conexion, $instrucLugar);
?>