<?php

require "arriba.php";
inicioPag("Reservas");
require "navBar.php";
if(!isset($_SESSION['loggedin'])){
   header('location: ./login.php');
}

?>
<div class='container mt-5 pt-3'>
 <table class='text-center table table-striped table-bordered'>
 <thead class='thead-dark'>
 <tr>
    <th class='font-weight-bold'>Fecha Entrada</th>
    <th class='font-weight-bold'>Fecha Salida</th>
    <th class='font-weight-bold'>Tipo</th>
    <th class='font-weight-bold'>Numero Noches</th>
    <th class='font-weight-bold'>Habitacion</th>
    <th class='font-weight-bold'>Cliente</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php 
 getDatos('reservas');
 ?>
</table>
</div>

<?php require 'abajo.php'; ?>