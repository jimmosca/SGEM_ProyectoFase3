<?php
  $date =  date("Y-m-d");
  if(isset($_POST["clients_form"])){
    require '../bbdd.php';
    $name = $_POST["name"];
    $preferences = $_POST["preferences"];
    $sql = "INSERT INTO clientes(fecha_registro, nombre, preferencias) VALUES('$date', '$name', '$preferences')";
    $result = mysqli_query($conn, $sql);
    header("Location: clientes.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir Clientes</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="clientes.php" method="post">
      <input type="hidden" name="clients_form" value="true">
      <label for="name">Nombre de cliente:</label><br>
      <input type="text" id="name" name="name"/><br>
      <label for="date">Fecha de registro:</label><br>
      <input type="date" id="date" name="date" value="<?php echo $date; ?>"/><br>
      <label for="preferences">Preferencias:</label><br>
      <textarea name="preferences" id="preferences" rows="8" cols="80"></textarea>
      <br><input type="submit" value="Añadir"/>
    </form>
  </body>
</html>
