<nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-center fixed-top mx-background-top-linear" >
  <div class="container-fluid">
    <a href="../index.php" class="navbar-brand">Wake&Bake</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ml-auto">

        <?php
        
         if (isset($_SESSION["loggedin"]) && $_SESSION['loggedin']) {
          echo "<li class='nav-item'><a class='nav-link' href='cerrarSesion.php'>Cerrar Sesion</a></li>";
        }else{
          echo "<li class='nav-item'><a class='nav-link' href='login.php'>Inicio Sesion</a></li>";
          
        } ?>


      </ul>
    </div>
  </div>
</nav>