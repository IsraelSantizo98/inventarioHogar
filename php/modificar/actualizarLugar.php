<?php 
include '../../php/conexion.php';
$lugares = $_GET['lugares'];
$nombre_lugar_de_compra = $_GET['nombre_lugar_de_compra'];
$ciudad_lugar_de_compra = $_GET['ciudad_lugar_de_compra'];
$telefono_lugar_de_compra = $_GET['telefono_lugar_de_compra'];
$email_lugar_de_compra = $_GET['email_lugar_de_compra'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Lugar de compra</title>
</head>
<body>
  <section class="header">
    <div class="headerContainer">
    </div>
  </section>
  <section class="main">
    <div class="containerForm">
      <h1>Modificar Lugar de compra</h1>
      <form action="modificarLugar.php" method="post">
        <label for="nombre_lugar_de_compra">Ingrese lugar de compra
          <input type="text" name="nombre_lugar_de_compra" value="<?php echo $nombre_lugar_de_compra ?>">
        </label>
        <label for="ciudad_lugar_de_compra">Ingrese cuidad
          <input type="text" name="ciudad_lugar_de_compra" value="<?php echo $ciudad_lugar_de_compra ?>">
        </label>
        <label for="telefono_lugar_de_compra">Ingrese telefono
          <input type="text" name="telefono_lugar_de_compra" value="<?php echo $telefono_lugar_de_compra ?>"> 
        </label>
        <label for="email_lugar_de_compra">Ingrese email
          <input type="email" name="email_lugar_de_compra" value="<?php echo $email_lugar_de_compra ?>">
        </label>
        <input type="hidden" name="id_lugar_de_compra" value = "<?php echo $lugares ?>">
        <input type="submit" value="Modidicar datos">
      </form>
    </div>
  </section>
</body>
</html>