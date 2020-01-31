<?php
if (isset($_SESSION["loggedin"]) && $_SESSION['loggedin']) {
  header('Location: ./src/modulos.php');
} else {
  header('Location: ./src/login.php');
}
die();
