<?php

require "arriba.php";
inicioPag("Limpiezas");
require "navBar.php";

if(!isset($_SESSION['loggedin'])){
   header('location: ./login.php');
}

?>
<div class='container mt-5 pt-3'>
 <table class='text-center table table-striped table-bordered'>
 <thead class='thead-dark'>
 <tr>
    <th class='font-weight-bold'>Fecha</th>
    <th class='font-weight-bold'>Observaciones</th>
    <th class='font-weight-bold'>Habitacion</th>
    <th class='font-weight-bold'>Trabajador</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php
 getDatos('limpiezas');
 ?>
</table>
</div>

<div style="width:350px;margin:auto;text-align:center;border:1px solid black;">
  <p>Nuevo servicio:</p>
  <?php include 'forms/limpieza.php'; ?>
</div>
<?php require 'abajo.php'; ?>
