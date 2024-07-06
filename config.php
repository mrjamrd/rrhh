<?php
require_once("include/usuarios.php");
if(!isset($_SESSION["usuario"]))
{
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UTESA Recinto Mao - Configuraciones</title>
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
         <img alt="UTESA" src="...">
       </a>
     </div>
      <p class="navbar-text navbar-right">
      <a href="#" class=" navbar-link">Salir</a></p>
   </div>

 </nav>
   </header>

<!-- aqui inicia -->
<div id="content">
  <!--pan-->
  <ol class="breadcrumb">
  <li><a href="home.php">Inicio</a></li>
  <li>Configuraciones</li>
  </ol>
  <!--pan-->
    <div class="row">
      <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/user.png"  alt="...">
         <div class="caption">
           <h3>Crear Usuarios</h3>
           <p>Agregar Usuarios Nuevos</p>
           <p><a href="#" class="btn btn-primary" role="button">Crear</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
      </div>
      <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/empleado.png" alt="...">
         <div class="caption">
           <h3>Crear Empleados</h3>
           <p>Agregar nuevos empleados</p>
           <p><a href="#" class="btn btn-primary" role="button">Crear Emp</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
      </div>
      <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/puesto.png" alt="...">
         <div class="caption">
           <h3>Crear Puestos</h3>
           <p>Agregar Nuevos Puestos</p>
           <p><a href="#" class="btn btn-primary" role="button">Crear Puesto</a>
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
           <h3>Crear Vacaciones</h3>
           <p>Las vacaciones de los empleados</p>
           <p><a href="#" class="btn btn-primary" role="button">Crear Vacaciones</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/salida.png" alt="...">
         <div class="caption">
           <h3>Status de Empleados</h3>
           <p>Cambiar los Status de empleados</p>
           <p><a href="#" class="btn btn-primary" role="button">Cambiar Status</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
     <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/permisos.png" alt="...">
         <div class="caption">
           <h3>Crear Permisos</h3>
           <p>Gestionar los Permisos</p>
           <p><a href="#" class="btn btn-primary" role="button">Crear Permisos</a>
             <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
         </div>
       </div>
     </div>
    </div>
<!-- 3ra fila -->
<div class="row">
 <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
     <img src="img/reportes.png" alt="...">
     <div class="caption">
       <h3>Reportes</h3>
       <p>Todos los Reportes Del sistema</p>
       <p><a href="reportes.php" class="btn btn-primary" role="button">Ir</a>
        <a href="#" class="btn btn-default" role="button">Visualizar</a>
         </p>
     </div>
   </div>
 </div>
 <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
     <img src="img/licencia.png" alt="...">
     <div class="caption">
       <h3>Licencias Medicas</h3>
       <p>Gestionar las licencias medicas</p>
       <p><a href="#" class="btn btn-primary" role="button">Crear Licencia</a>
          <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
     </div>
   </div>
 </div>
 <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
     <img src="img/backup.png" alt="...">
     <div class="caption">
       <h3>Crear Backup</h3>
       <p>Crear Backup</p>
       <p><a href="#" class="btn btn-primary" role="button">Crear Backup</a> <a href="#" class="btn btn-default" role="button">
         Restaurar
        </a></p>
     </div>
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
