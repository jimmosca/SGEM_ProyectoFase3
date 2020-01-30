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
 ?>