<?php

require "arriba.php";
inicioPag("Limpiezas");
require "navBar.php";

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

<?php require 'abajo.php'; ?>