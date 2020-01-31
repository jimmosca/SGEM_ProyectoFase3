<?php

require "arriba.php";
inicioPag("Gastos");
require "navBar.php";

?>
<div class='container mt-5 pt-3'>
 <table class='text-center table table-striped table-bordered'>
 <thead class='thead-dark'>
 <tr>
    <th class='font-weight-bold'>Nombre</th>
    <th class='font-weight-bold'>Fecha Operacion</th>
    <th class='font-weight-bold'>Precio</th>
    <th class='font-weight-bold'>Observaciones</th>
    <th class='font-weight-bold'>Departamento</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php 
 getDatos('gastos');
 ?>
</table>
</div>

<?php require 'abajo.php'; ?>