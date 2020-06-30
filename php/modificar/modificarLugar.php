<?php 
include '../../php/conexion.php';
$id_lugar_de_compra = $_POST['id_lugar_de_compra'];
$nombre_lugar_de_compra = $_POST['nombre_lugar_de_compra'];
$ciudad_lugar_de_compra = $_POST['ciudad_lugar_de_compra'];
$telefono_lugar_de_compra = $_POST['telefono_lugar_de_compra'];
$email_lugar_de_compra = $_POST['email_lugar_de_compra'];
$instrucLugar = "UPDATE lugares_de_compras SET nombre_lugar_de_compra = '$nombre_lugar_de_compra', ciudad_lugar_de_compra = '$ciudad_lugar_de_compra', telefono_lugar_de_compra = '$telefono_lugar_de_compra', email_lugar_de_compra = '$email_lugar_de_compra' WHERE id_lugar_de_compra = $id_lugar_de_compra";
$queryLugar = mysqli_query($inventario_conexion, $instrucLugar);
?>