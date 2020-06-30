<?php 
  include '../../php/conexion.php';
  $fabricantes = $_GET['fabricantes'];
  $nombre_fabricante = $_GET['nombre_fabricante'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar fabricante</title>
</head>
<body>
  <form action="modificarFabricante.php" method="post">
    <label for="nombreFabricante">Nombre Fabricante
      <input type="text" name="nombreFabricante" value=" <?php echo $nombre_fabricante?> ">
    </label>
    <input type="hidden" name="idFabricante" value="<?php echo $fabricantes?>">
    <input type="submit" value="Modificar datos">
  </form>
</body>
</html>