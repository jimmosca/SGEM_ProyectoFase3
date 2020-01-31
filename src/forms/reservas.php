<?php
  // require '../bbdd.php';
  if(isset($_POST["reservas_form"])){
    $tipo = $_POST["tipo"];
    $noches = $_POST["noches"];
    $entrada = $_POST["entrada"];
    $salida = $_POST["salida"];
    $habitacion = $_POST["habitacion"];
    $cliente = $_POST["cliente"];
    $sql = "INSERT INTO reservas(Tipo, numero_noches, fecha_entrada, fecha_salida, id_habitacion, id_cliente) VALUES('$tipo', '$noches', '$entrada', '$salida', '$habitacion', '$cliente')";
    $result = mysqli_query($conn, $sql);
    header("Location: reservas.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir reservas</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="reservas.php" method="post">
      <input type="hidden" name="reservas_form" value="true">
      <label for="tipo">Tipo:</label><br>
      <input type="text" id="tipo" name="tipo"/><br>
      <label for="noches">N Noches:</label><br>
      <input type="number" id="noches" name="noches"/><br>
      <label for="entrada">Fecha de entrada:</label><br>
      <input type="date" id="entrada" name="entrada" value="<?php echo date("Y-m-d"); ?>"><br>
      <label for="salida">Fecha de salida:</label><br>
      <input type="date" id="salida" name="salida"/><br>
      <label for="habitacion">Habitación:</label><br>
      <select id="habitacion" name="habitacion">
        <?php
          $query = "SELECT id, personas from habitaciones";
          $result = $conn->query($query);
          if(isset($result) && $result){
              while ( $row = $result->fetch_assoc()) {
                  echo "<option value='".$row["id"]."'>".$row["id"]." | ".$row["personas"]."</option>";
                }
          }
        ?>
      </select><br>
      <label for="cliente">Cliente</label><br>
      <select id="cliente" name="cliente">
        <?php
          $query = "SELECT id, nombre from clientes";
          $result = $conn->query($query);
          if(isset($result) && $result){
              while ( $row = $result->fetch_assoc()) {
                  echo "<option value='".$row["id"]."'>".$row["nombre"]."</option>";
                }
          }
        ?>
      </select><br>
      <input type="submit" value="Send"/>
    </form>
  </body>
</html>
