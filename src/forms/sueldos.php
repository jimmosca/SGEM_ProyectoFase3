<?php
  // require '../bbdd.php';
  if (isset($_POST["sueldos_form"])) {
    $fecha = $_POST["fecha"];
    $cantidad = $_POST["cantidad"];
    $extra = $_POST["extra"];
    $trabajador = $_POST["trabajador"];
    $sql = "INSERT INTO sueldos(fecha_operacion, cantidad, paga_extra, id_trabajador) VALUES('$fecha', '$cantidad', '$extra', '$trabajador')";
    $result = mysqli_query($conn, $sql);
    header("Location: sueldos.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Registrar sueldos</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="sueldos.php" method="post">
      <input type="hidden" name="sueldos_form" value="true">
      <label for="fecha">Fecha operación:</label><br>
      <input type="date" id="fecha" name="fecha" value="<?php echo date("Y-m-d"); ?>"><br>
      <label for="cantidad">Cantidad:</label><br>
      <input type="number" id="cantidad" name="cantidad" step="any"/><br>
      <label for="extra">Paga extra:</label><br>
      <input type="number" id="extra" name="extra" step="any"/><br>
      <label for="trabajador">Trabajador:</label><br>
      <select id="trabajador" name="trabajador">
        <?php
          $query = "SELECT id, nombre from trabajadores";
          $result = $conn->query($query);
          if(isset($result) && $result){
              while($row = $result->fetch_assoc()) {
                  echo "<option value='".$row["id"]."'>".$row["nombre"]."</option>";
                }
          }
        ?>
      </select><br>
      <input type="submit" value="Send"/>
    </form>
  </body>
</html>
