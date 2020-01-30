<?php

require "arriba.php";
inicioPag("Trabajadores");

?>
<div class='container'>
 <table class='text-center table table-striped table-bordered'>
 <thead class='thead-dark'>
 <tr>
    <th class='font-weight-bold'>Nombre</th>
    <th class='font-weight-bold'>Fecha Alta</th>
    <th class='font-weight-bold'>Fecha Baja</th>
    <th class='font-weight-bold'>Salario</th>
    <th class='font-weight-bold'>Fijo</th>
    <th class='font-weight-bold'>Puesto</th>
    <th class='font-weight-bold'>Departamento</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php 
 getTrabajadores();
 ?>
</table>
</div>

<?php require 'abajo.php'; ?>