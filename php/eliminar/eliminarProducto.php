<?php 
  include '../../php/conexion.php';
  $id_producto  = $_GET['inventarios'];
  $instruc = "DELETE FROM productos WHERE id_producto = $id_producto";
  $query = mysqli_query($inventario_conexion, $instruc);
?>