<?php
  if(isset($_POST["rooms_form"])){
    // require '../bbdd.php';
    $cama = $_POST["tipo-cama"];
    $number = $_POST["number"];
    $personas =  $_POST["personas"];
    $price = $_POST["price"];
    $ultimaLimpieza = $_POST["limpieza"];
    $cama_matrimonio = 0;
    $cama_individual = 0;
    if($ultimaLimpieza == "matrimonio"){
      $cama_matrimonio = 1;
      $cama_individual = 0;
    } else{
      $cama_matrimonio = 0;
      $cama_individual = 1;
    }
    $sql = "INSERT INTO habitaciones(cama_matrimonio, cama_individual, numero, precio_base, ultima_limpieza, personas) VALUES('$cama_matrimonio', '$cama_individual', '$number', '$price', '$ultimaLimpieza', '$personas')";
    $result = mysqli_query($conn, $sql);
    header("Location: habitaciones.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir habiación</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="habitaciones.php" method="post">
      <input type="hidden" name="rooms_form" value="true">
      <label>Tipo de cama:</label><br>
      <input type="radio" name="tipo-cama" value="matrimonio" checked/>Cama de matrimonio<br/>
      <input type="radio" name="tipo-cama" value="individual"/>Cama individual<br/>
      <label for="number">Número de habiación:</label><br>
      <input type="number" id="number" name="number"/><br>
      <label for="personas">Cantidad de personas:</label><br>
      <input type="number" id="personas" name="personas"/><br>
      <label for="price">Precio base:</label><br>
      <input type="number" id="price" name="price" step="any"/><br>
      <label for="limpieza">Última limpieza</label><br>
      <input type="date" id="limpieza" name="limpieza"/><br>
      <input type="submit"/>
    </form>
  </body>
</html>
