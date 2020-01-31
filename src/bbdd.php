<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "sgem_hotel";
$conn  =  new  mysqli($servername, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}


function getDatos($modulo)
{

    global $conn;
    $querys = [
        'trabajadores' => "SELECT nombre, fecha_alta, fecha_baja, salario, fijo, puesto, id_departamento, id FROM trabajadores",
        'clientes' => "SELECT nombre, fecha_registro, preferencias, id FROM clientes",
        'departamentos' => "SELECT nombre, id FROM departamentos",
        'gastos' => "SELECT nombre, fecha_operacion, precio, observaciones, id_departamento, id from gastos",
        'habitaciones' => "SELECT numero, personas, cama_matrimonio, cama_individual, precio_base, ultima_limpieza, id from habitaciones",
        'ingresos' => "SELECT fecha, cantidad, id_reserva, id from ingresos",
        'limpiezas' => "SELECT fecha, observaciones, id_habitacion, id_trabajador, id from limpiezas",
        'reservas' => "SELECT fecha_entrada, fecha_salida, Tipo, numero_noches, id_habitacion, id_cliente, id from reservas",
        'sueldos' => "SELECT cantidad, fecha_operacion, paga_extra, id_trabajador, id from sueldos"
    ];
    $query = $querys[$modulo];

    $result = $conn->query($query);

    if (isset($result) && $result) {
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr >";

            foreach ($row as $valor) {
                echo "<td>" . $valor . "</td>";
            }


            echo "</tr>";
        }
        echo "</tbody>";
    } else {
        echo $conn->error;
    }
}

