<?php
  require '../bbdd.php';
  if(isset($_POST["trabajadores_form"])){
    $alta = $_POST["alta"];
    $baja = $_POST["baja"];
    $salario = $_POST["salario"];
    $nombre = $_POST["nombre"];
    $fijo = 0;
    if($_POST["fijo"] == '1'){
      $fijo = 1;
    }
    $puesto = $_POST["puesto"];
    $departamento = $_POST["departamento"];
    $sql = "INSERT INTO trabajadores(fecha_alta, fecha_baja, salario, nombre, fijo, puesto, id_departamento) VALUES('$alta', '$baja', '$salario', '$nombre', '$fijo', '$puesto', '$departamento')";
    $result = mysqli_query($conn, $sql);
    header("Location: trabajadores.php?msg=Añadido_Con_Exito");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Añadir trabajadores</title>
  </head>
  <body>
    <?php
      if (isset($_GET["msg"])) {
        echo "<p style='color:blue'>".$_GET["msg"]."</p>";
      }
    ?>
    <form class="forms" action="trabajadores.php" method="post">
      <input type="hidden" name="trabajadores_form" value="true">
      <label for="alta">Fecha de alta:</label><br>
      <input type="date" id="alta" name="alta" value="<?php echo date("Y-m-d"); ?>"/><br>
      <label for="baja">Fecha de baja</label><br>
      <input type="date" id="baja" name="baja"/><br>
      <label for="salario">Salario:</label><br>
      <input type="number" id="salario" name="salario"/><br>
      <label for="nombre">Nombre:</label><br>
      <input type="text" id="nombre" name="nombre"/><br>
      <label for="fijo">¿Es fijo?</label>
      <input type="checkbox" id="fijo" name="fijo"/><br>
      <label for="puesto">Puesto</label><br>
      <input type="text" id="puesto" name="puesto"/><br>
      <label for="departamento">Departamento:</label>
      <select id="departamento" name="departamento">
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
      <input type="submit" value="Send"/>
    </form>
  </body>
</html>
