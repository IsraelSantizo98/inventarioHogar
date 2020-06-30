<?php 
  include '../../php/conexion.php';
  $inventarios = $_GET['inventarios'];
  $nombre_producto = $_GET['nombre_producto'];
  $nota_producto = $_GET['nota_producto'];
  $fecha_compra = $_GET['fecha_compra'];
  $fecha_caducidad = $_GET['fecha_caducidad'];
  $precio_compra = $_GET['precio_compra'];
  $capacidad_producto = $_GET['capacidad_producto'];
  $cantidad_producto = $_GET['cantidad_producto'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/actualizar.css">
  <title>Actualizar producto</title>
</head>
<body>
  <section class="header">
    <div class="headerContainer">
    </div>
  </section>
  <section class="main">
    <div class="containerForm">
      <h1>Modificar Producto</h1>
      <form action="modificarProducto.php" method="post">
        <label for="ubicacion">Seleccione una ubicacion
            <select name="ubicacion" id="">
              <?php 
                $instrucUbicacion = "SELECT * FROM ubicaciones";
                $queryUbicacion = mysqli_query($inventario_conexion, $instrucUbicacion);
                while($r = mysqli_fetch_assoc($queryUbicacion)){
                  echo "<option value = '".$r['id_ubicacion']."'>".$r['nombre_ubicacion']."</option>";
                }
              ?>
            </select>
          </label>
        <label for="fabricante">Seleccione fabricante
            <select name="fabricante" id="">
              <?php 
                $instrucFabricante = "SELECT * FROM fabricantes";
                $queryFabricante = mysqli_query($inventario_conexion, $instrucFabricante);
                while($r = mysqli_fetch_assoc($queryFabricante)){
                  echo "<option value = '".$r['id_fabricante']."'>".$r['nombre_fabricante']."</option>";
                }
              ?>
            </select>
          </label>
          <label for="lugarCompra">Seleccione lugar de compra
            <select name="lugarCompra" id="">
                <?php 
                  $instrucLugarCompra = "SELECT * FROM lugares_de_compras";
                  $queryLugarCompra = mysqli_query($inventario_conexion, $instrucLugarCompra);
                  while($r = mysqli_fetch_assoc($queryLugarCompra)){
                    echo "<option value = '".$r['id_lugar_de_compra']."'>".$r['nombre_lugar_de_compra']."</option>";
                  }
                ?>
            </select>
          </label>
            <label for="categoria">Seleccione categoria
              <select name="categoria" id="">
                    <?php 
                      $instrucCategoria = "SELECT * FROM categorias";
                      $queryCategoria = mysqli_query($inventario_conexion, $instrucCategoria);
                      while($r = mysqli_fetch_assoc($queryCategoria)){
                        echo "<option value ='".$r['id_categoria']."'>".$r['nombre_categoria']."</option>";
                      }
                    ?>
              </select>
            </label>
        <label for="nombre_producto">Nombre del producto
          <input type="text" name="nombre_producto" value="<?php echo $nombre_producto ?>">
        </label>
        <label for="nota_producto">Notas del producto
          <input type="text" name="nota_producto" value="<?php echo $nota_producto ?>">
        </label>
        <label for="fecha_compra">Fecha de compra
          <input type="date" name="fecha_compra" value="<?php echo $fecha_compra ?>">
        </label>
        <label for="fecha_caducidad">Fecha de caducidad
          <input type="date" name="fecha_caducidad" value="<?php echo $fecha_caducidad ?>">
        </label>
        <label for="precio_compra">Precio de compra
          <input type="text" name="precio_compra" value="<?php echo $precio_compra ?>">
        </label>
        <label for="capacidad_producto">Capacidad del producto
          <input type="text" name="capacidad_producto" value="<?php echo $capacidad_producto ?>">
        </label>
        <label for="cantidad_producto">Cantidad compradas
          <input type="number" name="cantidad_producto" value="<?php echo $cantidad_producto ?>">
        </label>
        <input type="hidden" name="id_producto" value="<?php echo $inventarios?>">
        <input class="submitBtn"type="submit" value="Modificar datos">
      </form>
    </div>
  </section>
</body>
</html>