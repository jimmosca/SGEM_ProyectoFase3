<?php
  $date =  date("Y-m-d");
  require '../bbdd.php';
  if(isset($_POST["expenses_form"])){
    $name = $_POST["departament"];
    $price = $_post["price"];
    $preferences = $_POST["preferences"];
    $departament = $_POST["departament"];
    $sql = "INSERT INTO gastos(fecha_operacion, nombre, precio, observaciones, id_departamento) VALUES('$date', '$name', '$price', '$preferences', '$departament')";
    $result = mysqli_query($conn, $sql);
    header("Location: gastos.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir gasto</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="" action="gastos.php" method="post">
      <input type="hidden" name="expenses_form" value="true">
      <label for="date">Fechab operación:</label><br>
      <input type="date" id="date" name="date" value="<?php echo $date; ?>"><br>
      <label for="name">Nombre de gasto:</label><br>
      <input type="text" id="name" name="name"/><br>
      <label for="price">Precio:</label><br>
      <input type="number" name="price"/><br>
      <label for="departementId">Departamento al que pertenece:</label><br>
      <select id="departamentId" name="departament">
        <?php
          $query = "SELECT nombre, id from departamentos";
          $result = $conn->query($query);
          if(isset($result) && $result){
              while ( $row = $result->fetch_assoc () ) {
                  echo "<option value='".$row["id"]."'>".$row["nombre"]."</option>";
                }
          }
        ?>
      </select><br>
      <label for="preferences">Observaciones:</label><br>
      <textarea name="preferences" id="preferences" rows="8" cols="80"></textarea><br>
      <input type="submit" value="Send">
    </form>
  </body>
</html>
