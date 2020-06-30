<?php 
  include '../conexion.php';
  $ubicacion = $_POST['ubicacion'];
  $fabricante = $_POST['fabricante'];
  $lugarCompra = $_POST['lugarCompra'];
  $categoria = $_POST['categoria'];
  $nombreProducto = $_POST['nombreProducto'];
  $notasProducto = $_POST['notasProducto'];
  $fechaCompraProducto = $_POST['fechaCompraProducto'];
  $fechaCaducidadProducto = $_POST['fechaCaducidadProducto'];
  $precioProducto = $_POST['precioProducto'];
  $capacidadProducto = $_POST['capacidadProducto'];
  $cantidadProducto = $_POST['cantidadProducto'];
  $instrucInsertarProducto = "INSERT INTO productos VALUES (null, $ubicacion, $fabricante, $lugarCompra, $categoria, '$nombreProducto', '$notasProducto', '$fechaCompraProducto', '$fechaCaducidadProducto', '$precioProducto', '$capacidadProducto', '$cantidadProducto')";
  $insertarProducto = mysqli_query($inventario_conexion, $instrucInsertarProducto);
?>