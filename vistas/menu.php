
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!--
    <link rel="stylesheet" href="../librerias/bootstrap/css/bootstrap.css" crossorigin="anonymous">
    <script src="../librerias/jquery-3.5.1.min.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../js/funciones.js"></script>
-->


</head>
<body>

  <!-- Begin Navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggler collapse navbar-collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/ventas.jpg" alt="" width="75px" height=""></a>
      </div>

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="inicio.php">
            <span class="glyphicon glyphicon-home"></span> Inicio</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Administrar Articulos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Categorias</a></li>
              <li><a href="articulos.php">Articulos</a></li>
            </ul>
          </li>
          <?php
            if($_SESSION['usuario']=="admin"):
          ?>
            <li>
              <a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
            </li>
          <?php 
            endif;
          ?>
          <li>
            <a href="clientes.php"><span class="glyphicon glyphicon-user"></span> Clientes</a>
          </li>
          <li>
            <a href="ventas.php"><span class="glyphicon glyphicon-usd"></span> Vender Articulo</a>
          </li>          
          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>                
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->



    </div>
  </nav>


<!-- /container -->        


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  }
  );
</script>