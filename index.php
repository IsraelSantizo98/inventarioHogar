<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/9618200a61.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Inventario</title>
</head>
<body>
  <div class="wrapper">
    <section id="header">
      <div class="headerContainer">
        <div class="configurationUser"><i class="icoHeader fas fa-cog"></i></div>
        <div class="notificationUser"><i class="icoHeader far fa-bell"></i></div>
        <div class="profileUser">
          <figure><img src="/" alt="Img Profile"></figure>
          <span><i class="icoHeader fas fa-sort-down"></i></span>
        </div>
      </div>
    </section>
    <section id="sideMenu">
      <nav>
        <ul>
          <div class="imgContainer">
            <figure><img src="assets/logo/logo.svg" alt="Logo de la pagina web"></figure>
          </div>
          <li><a href="#"></i>Inventario</a></li>
          <li><a href="#" onclick="mostrarForm1()"></i>Productos<i class="icoMenuArrow fas fa-sort-down"></i></a>
            <ul>
              <li><span onclick="mostrarForm2()">Insertar producto</span></li>
            </ul>
          </li>
          <li><a href="#" onclick="mostrarForm3()">Fabricante<i class="icoMenuArrow fas fa-sort-down"></i></a>
            <ul>
              <li><span onclick="mostrarForm4()">Insertar fabricante</span></li>
            </ul>
          </li>
          <li><a href="#" onclick="mostrarForm5()">Lugar de compra<i class="icoMenuArrow fas fa-sort-down"></i></a>
            <ul>
              <li><span onclick="mostrarForm6()">Insertar lugar de compra</span></li>
            </ul>
          </li>
          <li><a href="#" onclick="mostrarForm7()">Categoria<i class="icoMenuArrow fas fa-sort-down"></i></a>
            <ul>
              <li><span onclick="mostrarForm8()">Insertar categoria</span></li>
            </ul>
          </li>
          <li><a href="#" onclick="">Ubicacion<i class="icoMenuArrow fas fa-sort-down"></i></a>
            <ul>
              <li><span onclick="">Insertar ubicacion de alimentos</span></li>
            </ul>
          </li>
        </ul>
      </nav>
    </section>
    <section id="main">
      </form>
      <div id="containerModal1"class="tableContainer">
        <h2>Inventario</h2>
        <div class="contenidoModal">
          <table>
            <tr>
              <th>Ubicacion</th>
              <th>Nombre del producto</th>
              <th>Notas</th>
              <th>Fecha de compra</th>
              <th>Fecha de caducidad</th>
              <th>Precio de compra</th>
              <th>Capacidad del producto</th>
              <th>Cantidad del producto</th>
              <th>Modificar producto</th>
              <th>Eliminar producto</th>
              </th>
            </tr>
              <?php 
                $instruc = "SELECT * FROM productos ORDER BY nombre_producto ASC";
                $query = mysqli_query($inventario_conexion, $instruc);
                while($r = mysqli_fetch_assoc($query)){
                  echo"<tr><td>".$r['id_ubicacion']."</td><td>".$r['nombre_producto']."</td><td>".$r['nota_producto']."</td><td>".$r['fecha_compra']."</td><td>".$r['fecha_caducidad']."</td><td>".$r['precio_compra']."</td><td>".$r['capacidad_producto']."</td><td>".$r['cantidad_producto']."</td><td><a href='php/modificar/actualizaProducto.php?&inventarios=".$r['id_producto']."&nombre_producto=".$r['nombre_producto']."&nota_producto=".$r['nota_producto']."&fecha_compra=".$r['fecha_compra']."&fecha_caducidad=".$r['fecha_caducidad']."&precio_compra=".$r['precio_compra']."&capacidad_producto=".$r['capacidad_producto']."&cantidad_producto=".$r['cantidad_producto']."'>Actualizar</a></td><td><a href='php/eliminar/eliminarProducto.php?&inventarios=".$r['id_producto']."'>Eliminar</a></td>";
                }
              ?>
                
              
          </table>
        </div>
      </div>
      <!-- INSERT -->
      <div class="containerInsert" id="containerModal2">
        <h2>Insertar Producto</h2>
        <form class="formInsert"action="php/insert/insertarProducto.php" method="POST">
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
          <label for="fabricante">Seleccione un fabricante
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
          <label for="lugarCompra">Seleccione un lugar de compra
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
            <label for="categoria">Seleccione una categoria
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
            <label for="nombreProducto">Ingrese nombre del producto
              <input type="text" name="nombreProducto" required>
            </label>
            <label for="notasProducto">Ingrese notas del producto
              <input class="inputNotas" type="text" name="notasProducto" >
            </label>
            <label for="fechaCompraProducto">Ingrese fecha de compra del producto
              <input type="date" name="fechaCompraProducto">
            </label>
            <label for="fechaCaducidadProducto">Ingrese fecha de caducidad del producto
              <input type="date" name="fechaCaducidadProducto">
            </label>
            <label for="precioProducto">Ingrese precio del producto
              <input type="number" name="precioProducto">
            </label>
            <label for="capacidadProducto">Ingrese capacidad del producto
              <input type="text" name="capacidadProducto">
            </label>
            <label for="cantidadProducto">Ingrese cantidad del producto
              <input type="number" name="cantidadProducto">
            </label>
            <input  class="submitBtn"type="submit" value="Enviar datos">
        </form>
      </div>
      <!-- Ver fabricante -->
      <section class="fabricante">
        <div class="containerFabricante" id="containerModal3">
          <h2>Fabricante</h2>
          <div class="contenidoFabricante">
            <table>
            <tr>
              <th>Numero de fabricante</th>
              <th>Nombre fabricante</th>
              <th>Modificar fabricante</th>
              <th>Eliminar fabricante</th>
            </tr>
            <?php 
              $instrucFabricante = "SELECT * FROM fabricantes ORDER BY id_fabricante ASC";
              $queryFabricante = mysqli_query($inventario_conexion, $instrucFabricante);
              while($r = mysqli_fetch_assoc($queryFabricante)){
                echo "<tr><td>".$r['id_fabricante']."</td><td>".$r['nombre_fabricante']."</td><td><a href='php/modificar/actualizarFabricante.php?&fabricantes=".$r['id_fabricante']."&nombre_fabricante=".$r['nombre_fabricante']."'>Actualizar</a></td><td><a href='php/eliminar/eliminarFabricante.php?&fabricantes=".$r['id_fabricante']."'>Eliminar</a></td></tr>";
              }
            ?>
            </table>
          </div>
        </div>
        <div class="containerInsert" id="containerModal4">
        <h2>Insertar Fabricante</h2>
        <form class="formInsert"action="php/insert/insertarFabricante.php" method="POST">
          <label for="nameFabricante">Ingrese nombre de fabricante
          <input type="text" name="nameFabricante">
          </label>
          <input class="submitBtn" type="submit" value="Enviar datos">
        </form>
        </div>
        <!-- LUGAR DE COMPRA -->
        <div class="tableContainer" id="containerModal5">
            <h2>Lugar de compra</h2>
            <div class="contenidoModal">
              <table>
                <tr>
                  <th>Numero del establecimiento</th>
                  <th>Nombre del establecimiento</th>
                  <th>Cuidad</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Actualizar</th>
                  <th>Eliminar</th>
                </tr>
                <?php 
                  $instrucLugarCompra = "SELECT * FROM lugares_de_compras";
                  $queryLugarCompra = mysqli_query($inventario_conexion, $instrucLugarCompra);
                  while($r = mysqli_fetch_assoc($queryLugarCompra)){
                    echo "<tr><td>".$r['id_lugar_de_compra']."</td><td>".$r['nombre_lugar_de_compra']."</td><td>".$r['ciudad_lugar_de_compra']."</td><td>".$r['telefono_lugar_de_compra']."</td><td>".$r['email_lugar_de_compra']."</td><td><a href='php/modificar/actualizarLugar.php?&lugares=".$r['id_lugar_de_compra']."&nombre_lugar_de_compra=".$r['nombre_lugar_de_compra']."&ciudad_lugar_de_compra=".$r['ciudad_lugar_de_compra']."&telefono_lugar_de_compra=".$r['telefono_lugar_de_compra']."&email_lugar_de_compra=".$r['email_lugar_de_compra']."'>Actualizar</a></td><td><a href='php/eliminar/eliminarLugar.php?&lugares=".$r['id_lugar_de_compra']."'>Eliminar</a></td></tr>";
                  }
                ?>
              </table>
            </div>
        </div>
        <div class="containerInsert" id="containerModal6">
          <h2>Insertar lugar de compra</h2>
          <form class="formInsert" action="php/insert/insertarLugar.php" method="POST">
            <label for="nombreLugar">Nombre del establecimiento
              <input type="text" name="nombreLugar">
            </label>
            <label for="cuidadLugar">Cuidad
              <input type="text" name="cuidadLugar">
            </label>
            <label for="telefonoLugar">Telefono
              <input type="text" name="telefonoLugar">
            </label>
            <label for="emailLugar">Email
              <input type="email" name="emailLugar">
            </label>
            <input class="submitBtn" type="submit" value="Enviar datos">
          </form>
        </div>
        <!-- CATEGORIA  -->
        <div class="tableContainer" id="containerModal7">
            <h2>Categoria de productos</h2>
            <div class="contenidoModal">
              <table>
              <tr>
                <th>Nombre de categoria</th>
                <th>Descripcion</th>
                <th>Email</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
              </tr>
              <?php 
                $instrucCategoria = "SELECT * FROM categorias ORDER BY nombre_categoria ASC";
                $queryCategoria = mysqli_query($inventario_conexion, $instrucCategoria);
                while($r = mysqli_fetch_assoc($queryCategoria)){
                  echo "<tr><td>".$r['nombre_categoria']."</td><td>".$r['descripcion_categoria']."</td><td>".$r['email_categoria']."</td><td><a href='php/modificar/actualizarCategoria.php?&categorias=".$r['id_categoria']."&nombre_categoria=".$r['nombre_categoria']."&descripcion_categoria=".$r['descripcion_categoria']."&email_categoria=".$r['email_categoria']."'>Actualizar</a></td><td><a href='php/eliminar/eliminarCategoria.php?&categorias=".$r['id_categoria']."'>Eliminar</a></td></tr>";
                }
              ?>
              </table>
            </div>
        </div>
        <div class="containerInsert" id="containerModal8">
          <h2>Insertar categoria</h2>
          <form class="formInsert" action="php/insert/insertarCategoria.php" method="POST">
            <label for="nombreCategoria">Nombre de la categoria
                <input type="text" name="nombreCategoria">
            </label>
            <label for="descripcionCategoria">Descripcion
                <input type="text" name="descripcionCategoria">
            </label>
            <label for="emailCategoria">Email
                <input type="email" name="emailCategoria" id="">
            </label>
            <input class="submitBtn" type="submit" value="Enviar datos">
          </form>
    </section>
  </div>
  <script src="js/main6.js"></script>
</body>
</html>