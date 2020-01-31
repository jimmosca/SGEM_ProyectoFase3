<?php

require "arriba.php";
inicioPag("Habitaciones");
require "navBar.php";

if(!isset($_SESSION['loggedin'])){
   header('location: ./login.php');
}

?>
<div class='container mt-5 pt-3'>
 <table class='text-center table table-striped table-bordered'>
 <thead class='thead-dark'>
 <tr>
    <th class='font-weight-bold'>Numero</th>
    <th class='font-weight-bold'>Personas</th>
    <th class='font-weight-bold'>Camas Dobles</th>
    <th class='font-weight-bold'>Camas Individuales</th>
    <th class='font-weight-bold'>Precio Base</th>
    <th class='font-weight-bold'>Ultima Limpieza</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php
 getDatos('habitaciones');
 ?>
</table>
</div>

<div style="width:350px;margin:auto;text-align:center;border:1px solid black;">
  <p>Nueva habitación:</p>
  <?php include 'forms/rooms.php'; ?>
</div>
<?php require 'abajo.php'; ?>
