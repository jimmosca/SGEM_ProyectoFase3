<?php

require "arriba.php";
inicioPag("Clientes");
require "navBar.php";

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

<?php require 'abajo.php'; ?>