<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "sgem_hotel";
$conn  =  new  mysqli($servername,$user,$password, $dbname);


if ($conn->connect_error) {
die("Error: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}


function getTrabajadores(){
    global $conn;
    $query = "SELECT nombre, fecha_alta, fecha_baja, salario, fijo, puesto, id_departamento, id FROM trabajadores";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['nombre']."</p>
                <p>".$row['fecha_alta']."</p>
                <p>".$row['fecha_baja']."</p>
                <p>".$row['salario']."</p>
                <p>".$row['fijo']."</p>
                <p>".$row['puesto']."</p>
                <p>".$row['id_departamentos']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getClientes(){
    global $conn;
    $query = "SELECT nombre, fecha_registro, preferencias, id FROM clientes";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['nombre']."</p>
                <p>".$row['fecha_registro']."</p>
                <p>".$row['preferencias']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getDepartamentos(){
    global $conn;
    $query = "SELECT nombre, id FROM departamentos";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['nombre']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getGastos(){
    global $conn;
    $query = "SELECT nombre, fecha_operacion, precio, observaciones, id_departamento, id from gastos";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['nombre']."</p>
                <p>".$row['fecha_operacion']."</p>
                <p>".$row['precio']."</p>
                <p>".$row['observaciones']."</p>
                <p>".$row['id_departamento']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getHabitaciones(){
    global $conn;
    $query = "SELECT numero, personas, cama_matrimonio, cama_individual, precio_base, ultima_limpieza, id from habitaciones";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['numero']."</p>
                <p>".$row['personas']."</p>
                <p>".$row['cama_matrimonio']."</p>
                <p>".$row['cama_individual']."</p>
                <p>".$row['precio_base']."</p>
                <p>".$row['ultima_limpieza']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getIngresos(){
    global $conn;
    $query = "SELECT fecha, cantidad, id_reserva, id from ingresos";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['fecha']."</p>
                <p>".$row['cantidad']."</p>
                <p>".$row['id_reserva']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getLimpiezas(){
    global $conn;
    $query = "SELECT fecha, observaciones, id_habitacion, id_trabajador, id from limpiezas";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['fecha']."</p>
                <p>".$row['observaciones']."</p>
                <p>".$row['id_habitacion']."</p>
                <p>".$row['id_trabajador']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getReservas(){
    global $conn;
    $query = "SELECT fecha_entrada, fecha_salida, Tipo, numero_noches, id_habitacion, id_cliente, id from reservas";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['fecha_entrada']."</p>
                <p>".$row['fecha_salida']."</p>
                <p>".$row['Tipo']."</p>
                <p>".$row['numero_noches']."</p>
                <p>".$row['id_habitacion']."</p>
                <p>".$row['id_cliente']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}
function getSueldos(){
    global $conn;
    $query = "SELECT cantidad, fecha_operacion, paga_extra, id_trabajador, id from sueldos";
    
    $result = $conn->query ( $query );

    if(isset($result) && $result){
        while ( $row = $result->fetch_assoc () ) {
            echo "<div class='d-flex flex-row'>
                <p>".$row['cantidad']."</p>
                <p>".$row['fecha_operacion']."</p>
                <p>".$row['paga_extra']."</p>
                <p>".$row['id_trabajador']."</p>
                <p>".$row['id']."</p>
            </div>";
          }
    }
}

 ?>