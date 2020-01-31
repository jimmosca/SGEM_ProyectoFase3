<?php

require "arriba.php";
inicioPag("Modulos");
require "navBar.php";

?>

<div class='container mt-5 pt-5'>
    <h1 class='row'>Recursos Humanos</h1>
    <div class='row'>
        <div class='col-4'><a href="trabajadores.php">
                <div class='row'>
                    <h1 class='col-12'>Trabajadores</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir trabajadores</p>
                </div>
            </a></div>
        <div class='col-4'><a href="departamentos.php">
                <div class='row'>
                    <h1 class='col-12'>Departamentos</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir departamentos</p>
                </div>
            </a></div>
        <div class='col-4'><a href="sueldos.php">
                <div class='row'>
                    <h1 class='col-12'>Sueldos</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir sueldos</p>
                </div>
            </a></div>
    </div>
    <h1 class='row'>Recepcion</h1>
    <div class='row'>

        <div class='col-3'><a href="clientes.php">
                <div class='row'>
                    <h1 class='col-12'>Clientes</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir clientes</p>
                </div>
            </a></div>
            <div class='col-3'><a href="habitaciones.php">
                <div class='row'>
                    <h1 class='col-12'>Habitaciones</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir habitaciones</p>
                </div>
            </a></div>
            <div class='col-3'><a href="reservas.php">
                <div class='row'>
                    <h1 class='col-12'>Reservas</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir reservas</p>
                </div>
            </a></div>
            <div class='col-3'><a href="limpiezas.php">
                <div class='row'>
                    <h1 class='col-12'>Limpiezas</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir limpuezas</p>
                </div>
            </a></div>
    </div>
    <h1 class='row'>Finanzas</h1>
    <div class='row'>
        <div class='col-6'><a href="gastos.php">
                <div class='row'>
                    <h1 class='col-12'>Gastos</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir gastos</p>
                </div>
            </a></div>
            <div class='col-6'><a href="ingresos.php">
                <div class='row'>
                    <h1 class='col-12'>Ingresos</h1>
                    <p class='col-12'>Aqui puedes consultar y anadir ingresos</p>
                </div>
            </a></div>
    </div>
    
</div>

<?php require 'abajo.php'; ?>