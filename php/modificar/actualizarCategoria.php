<?php 
include '../../php/conexion.php';
$categorias = $_GET['categorias'];
$nombre_categoria = $_GET['nombre_categoria'];
$descripcion_categoria = $_GET['descripcion_categoria'];
$email_categoria = $_GET['email_categoria'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/actualizar.css">
  <title>Actualizar categoria</title>
</head>
<body>
  <section class="header">
    <div class="headerContainer">
    </div>
  </section>
  <section class="main">
    <div class="containerForm">
      <h1>Modificar Producto</h1>
      <form action="modificarCategoria.php" method="post">
        <label for="nombreCategoria">Nombre de la categoria
            <input type="text" name="nombreCategoria" value="<?php echo $nombre_categoria ?>">
        </label>
        <label for="descripcionCategoria">Descripcion
            <input type="text" name="descripcionCategoria" value="<?php echo $descripcion_categoria ?>">
        </label>
        <label for="emailCategoria">Email
            <input type="email" name="emailCategoria" value="<?php echo $email_categoria ?>">
        </label>
        <input type="hidden" name="idCategoria" value="<?php echo $categorias ?>">
        <input class="submitBtn" type="submit" value="Actualizar datos">
      </form>
    </div>
  </section>
</body>
</html>