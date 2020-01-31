<?php
session_start();
?>

<?php

include 'bbdd.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM usuarios WHERE usuario = '$username'";


$result = $conn->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);

if ($password==$row['password']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    
    header('Location: ./modulos.php');

 } else { 
  header('Location: ./login.php');
 }
 mysqli_close($conn); 
 die();
 ?>