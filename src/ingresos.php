<?php

require "arriba.php";
inicioPag("Ingresos");
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
    <th class='font-weight-bold'>Cantidad</th>
    <th class='font-weight-bold'>Reserva</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php 
 getDatos('ingresos');
 ?>
</table>
</div>

<?php require 'abajo.php'; ?>