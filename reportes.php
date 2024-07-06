<?php
/*require_once("include/usuarios.php");
if(!isset($_SESSION["usuario"]))
{
  header('Location: index.php');
  exit;
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UTESA Recinto Mao - Reportes</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="ui/jquery-ui.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/validation.js">
  <script src="js/main.js"></script>
</head>
<body>
<div id="wrapper">
   <header class="">
    <nav class="navbar navbar-default">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">
         <img alt="UTESA-Reportes" src="...">
       </a>
     </div>
      <p class="navbar-text navbar-right">
        <a href="#"><?php /*echo   $_SESSION["usuario"];*/?></a>
      <a href="salir.php" class=" navbar-link">Salir</a></p>
   </div>

 </nav>
   </header>
<!-- aqui inicia -->
<div id="content">
  <!--pan-->
  <ol class="breadcrumb">
  <li><a href="home.php">Inicio</a></li>
  <li>Reportes</li>
  </ol>
  <!--pan-->
    <div class="row">
      <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/home.png"  alt="...">
         <div class="caption">
           <h3>Ir Al Inicio</h3>
           <p>Ir Al Inicio</p>
           <p><a href="home.php" class="btn btn-primary" role="button">Inicio</a> <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
      </div>
      <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/empleado.png" alt="...">
         <div class="caption">
           <h3>Reportes Empleados</h3>
           <p>Imprimir Reportes de empleados</p>
           <p><a href="#" class="btn btn-primary" role="button">Imprimir</a> <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
      </div>
      <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/puesto.png" alt="...">
         <div class="caption">
           <h3>Certificaciones</h3>
           <p>Imprimir Certificaciones</p>
           <p><a href="#" class="btn btn-primary" role="button">Imprimir</a>
              <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
      </div>
    </div>
    <!-- segunda fila -->
    <div class="row">
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/vacaciones.png" alt="...">
         <div class="caption">
           <h3>Reportes Vacaciones</h3>
           <p>Imprimir Vacaciones</p>
           <p><a href="#" class="btn btn-primary" role="button">Imprimir</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/salida.png" alt="...">
         <div class="caption">
           <h3>Reportes Status de Emp</h3>
           <p>Imprimir Status de Empleados</p>
           <p><a href="#" class="btn btn-primary" role="button">Imprimir</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/permisos.png" alt="...">
         <div class="caption">
           <h3>Reportes de Permisos</h3>
           <p>Imprimir reportes de permisos</p>
           <p><a href="#" class="btn btn-primary" role="button">Imprimir</a>
              <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
    </div>
    <!-- 3ra fila -->
    <div class="row">
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/permisos.png" alt="...">
         <div class="caption">
           <h3>Amonestación</h3>
           <p>Imprimir Amonestación</p>
           <p><a href="#" class="btn btn-primary" role="button">Imprimir</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/licencia.png" alt="...">
         <div class="caption">
           <h3>Reporte Licencia Medica</h3>
           <p>Imprimir Status de Empleados</p>
           <p><a href="#" class="btn btn-primary" role="button">Imprimir</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/salir.png" alt="...">
         <div class="caption">
           <h3>Salir del Sistema</h3>
           <p>Salir del Sistema</p>
           <p><a href="#" class="btn btn-primary" role="button">Salir</a>
              <a href="#" class="btn btn-default" role="button">Volver al Inicio</a></p>
         </div>
       </div>
     </div>
    </div>
<!--Aqui Final-->
</div>
<footer>
  UTESA By <a href="#">Amply Code</a> 2017
  <div id="">
    <a href="config.php"><span class=" glyphicon glyphicon-cog"></span></a>
  </div>
</footer>
</body>
</html>
