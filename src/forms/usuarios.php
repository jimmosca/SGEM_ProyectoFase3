<?php
  require '../bbdd.php';
  if(isset($_POST["users_form"])){
    $user = $_POST["user"];
    $password = $_POST["password"];
    $trabajador = $_POST["trabajador"];
    $sql = "INSERT INTO usuarios(usuario, password, id_trabajador) VALUES('$user', '$password', '$trabajador')";
    $result = mysqli_query($conn, $sql);
    header("Location: usuarios.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir usuario</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="usuarios.php" method="post">
      <input type="hidden" name="users_form" value="true">
      <label for="user">Nombre de usuario:</label><br>
      <input type="text" id="user" name="user"/><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"/><br>
      <label for="trabajador">Trabajador:</label>
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
