<?php 
  include '../../php/conexion.php';
  $id_producto = $_POST['id_producto'];
  $nombre_producto = $_POST['nombre_producto'];
  $nota_producto = $_POST['nota_producto'];
  $fecha_compra = $_POST['fecha_compra'];
  $fecha_caducidad = $_POST['fecha_caducidad'];
  $precio_compra = $_POST['precio_compra'];
  $capacidad_producto = $_POST['capacidad_producto'];
  $cantidad_producto = $_POST['cantidad_producto'];
  $instruc = "UPDATE productos SET nombre_producto = '$nombre_producto', nota_producto = '$nota_producto', fecha_compra = '$fecha_compra', fecha_caducidad = '$fecha_caducidad', precio_compra = '$precio_compra', capacidad_producto = '$capacidad_producto', cantidad_producto = '$cantidad_producto' WHERE id_producto = $id_producto";
  $query = mysqli_query($inventario_conexion, $instruc );
?>