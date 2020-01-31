<?php
  require '../bbdd.php';
  if(isset($_POST["ingresos_form"])){
    $date = $_POST["date"];
    $amount = $_POST["amount"];
    $reserva = $_POST["reserva"];
    $sql = "INSERT INTO ingresos(fecha, cantidad, id_reserva) VALUES('$date', '$amount', '$reserva')";
    $result = mysqli_query($conn, $sql);
    header("Location: ingresos.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir ingreso</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="ingresos.php" method="post">
      <input type="hidden" name="ingresos_form" value="true">
      <label for="date">Fecha operación:</label><br>
      <input type="date" id="date" name="date" value="<?php echo date("Y-m-d"); ?>"><br>
      <label for="amount">Cantidad:</label><br>
      <input type="number" id="amount" name="amount" step="any"/><br>
      <label for="reserva">Reserva a la que pertenece:</label><br>
      <select id="reserva" name="reserva">
        <?php
          $query = "SELECT id, Tipo from reservas";
          $result = $conn->query($query);
          if(isset($result) && $result){
              while ( $row = $result->fetch_assoc () ) {
                  echo "<option value='".$row["id"]."'>".$row["id"]." | ".$row["Tipo"]."</option>";
                }
          }
        ?>
      </select><br>
      <input type="submit" value="Send"/>
    </form>
  </body>
</html>
