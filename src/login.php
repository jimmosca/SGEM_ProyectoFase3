<?php
require "arriba.php";
inicioPag("Login");
require "navBar.php";
?>



<div class="container mt-5 pt-5">

  <form action="checklogin.php" method="post">


    <div class="container">
      <div class='form-group d-flex flex-column'>
        <label for="uname"><b class='font-weight-bold'>Usuario</b></label>
        <input type="text" placeholder="Ingresar Usuario" name="username" required>
      </div>
      <div class='form-group d-flex flex-column'>
        <label for="psw"><b class='font-weight-bold'>Contraseña</b></label>
        <input type="password" placeholder="Ingresa tu Contraseña" name="password" required>
      </div>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Recordarme
      </label>
    </div>
  </form>
</div>

<?php
require 'abajo.php';
?>