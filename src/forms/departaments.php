<?php
  if(isset($_POST["departaments_form"])){
    require '../bbdd.php';
    $name = $_POST["departament"];
    $sql = "INSERT INTO departamentos(nombre) VALUES('$name')";
    $result = mysqli_query($conn, $sql);
    header("Location: departaments.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Departamentos</title>
    <style media="screen">
      div {
        width: 250px;
      }
      h2 {
        font: 400 40px/1.5 Helvetica, Verdana, sans-serif;
        margin: 0;
        padding: 0;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }
      li {
        font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
        border-bottom: 1px solid #ccc;
      }
      li:last-child {
        border: none;
      }
    </style>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <div>
      <h2>Departamentos</h2>
      <ul>
        <?php
          require '../bbdd.php';
          $query = "SELECT nombre, id FROM departamentos";
          $result = $conn->query($query);
          if(isset($result) && $result){
            while ( $row = $result->fetch_assoc () ) {
              echo "<li>".$row["nombre"]."</li>";
            }
          }
        ?>
        <form class="forms" action="departaments.php" method="post">
          <input type="hidden" name="departaments_form" value="true">
          <li><input type="text" name="departament" placeholder="Añadir departamento"/><input type="submit" value="Add"/></li>
        </form>
      </ul>
    </div>
  </body>
</html>
