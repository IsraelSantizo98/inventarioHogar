<?php 
  include '../../php/conexion.php';
  $idCategoria = $_POST['idCategoria'];
  $nombreCategoria = $_POST['nombreCategoria'];
  $descripcionCategoria = $_POST['descripcionCategoria'];
  $emailCategoria = $_POST['emailCategoria'];
  $instruc = "UPDATE categorias SET nombre_categoria = '$nombreCategoria', descripcion_categoria = '$descripcionCategoria', email_categoria = '$emailCategoria' WHERE id_categoria = $idCategoria";
  $query = mysqli_query($inventario_conexion, $instruc );
?>