<?php

require "arriba.php";
inicioPag("Clientes");
require "navBar.php";

if(!isset($_SESSION['loggedin'])){
   header('location: ./login.php');
}

?>
<div class='container mt-5 pt-3'>
 <table class='text-center table table-striped table-bordered'>
 <thead class='thead-dark'>
 <tr>
    <th class='font-weight-bold'>Nombre</th>
    <th class='font-weight-bold'>Fecha Registro</th>
    <th class='font-weight-bold'>Preferencias</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php
 getDatos('clientes');
 ?>
</table>
</div>

<div style="width:350px;margin:auto;text-align:center;border:1px solid black;">
  <p>Nuevo cliente:</p>
  <?php include 'forms/clientes.php'; ?>
</div>
<?php require 'abajo.php'; ?>
