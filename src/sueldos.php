<?php

require "arriba.php";
inicioPag("Sueldos");
require "navBar.php";

?>
<div class='container mt-5 pt-3'>
 <table class='text-center table table-striped table-bordered'>
 <thead class='thead-dark'>
 <tr>
    
    <th class='font-weight-bold'>Cantidad</th>
    <th class='font-weight-bold'>Fecha</th>
    <th class='font-weight-bold'>Paga Extra</th>
    <th class='font-weight-bold'>Trabajador</th>
    <th class='font-weight-bold'>ID</th>
 </tr>
 </thead>
 <?php 
 getDatos('sueldos');
 ?>
</table>
</div>

<?php require 'abajo.php'; ?>