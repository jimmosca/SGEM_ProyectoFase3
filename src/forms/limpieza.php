<?php
  require '../bbdd.php';
  if(isset($_POST["limpieza_form"])){
    $date = $_POST["date"];
    $habitacion = $_POST["habitacion"];
    $trabajador = $_POST["trabajador"];
    $preferences = $_POST["observaciones"];
    $sql = "INSERT INTO limpiezas(fecha, observaciones, id_habitacion, id_trabajador) VALUES('$date', '$preferences', '$habitacion', '$trabajador')";
    $result = mysqli_query($conn, $sql);
    header("Location: limpieza.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir turno limpieza</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="limpieza.php" method="post">
      <input type="hidden" name="limpieza_form" value="true">
      <label for="date">Fecha operación:</label><br>
      <input type="date" id="date" name="date" value="<?php echo date("Y-m-d"); ?>"><br>
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
      <label for="trabajador">Trabajador:</label><br>
      <select id="trabajador" name="trabajador">
        <?php
          $query = "SELECT id, puesto from trabajadores";
          $result = $conn->query($query);
          if(isset($result) && $result){
              while ( $row = $result->fetch_assoc()) {
                  echo "<option value='".$row["id"]."'>".$row["id"]." | ".$row["puesto"]."</option>";
                }
          }
        ?>
      </select><br>
      <label for="observaciones">Observaciones:</label><br>
      <textarea name="observaciones" id="observaciones" rows="8" cols="80"></textarea>
      <br><input type="submit" value="Send">
    </form>
  </body>
</html>
