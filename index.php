<?php
require_once("include/usuarios.php");

 if(isset($_POST["usuario"]))
 {
   $tra = new Trabajo();
   $datos = $tra->loging(htmlspecialchars($_POST["usuario"]),sha1($_POST["pass"]));
   if(sizeof($datos)==0)
   {
      die("El usuario que Ingresaste es incorecto");
   }else{
    //  print_r($datos);
    //  exit;
    $_SESSION["usuario"]=$datos[0]->usuario;
    header('Location: home.php');

      //die("todo bien hasta aqui");
   }

 }
 if(isset($_SESSION["usuario"]))
 {
     header('Location: home.php');

 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UTESA Recinto Mao - Bienvenido</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="ui/jquery-ui.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/main.js"></script>
</head>
<body>
<div id="wraper">
   <div id="logo">
     <img src="img/utesa.png" width="250" heigtht="250" alt="">
   </div>
  <div id="login">
      <div id="">
        <h3>Control de Usuarios</h3>
      </div>
      <div class="">
        <form role="form" class="form-horizontal" method="post" action="index.php">
          <!-- Usuario del Login -->
          <div class="form-group">
            <div class="input-group">
              <label class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
              </label>
              <input type="text" class="form-control" name="usuario" placeholder="Usuario" required autofocus />
            </div>
          </div>
          <!-- Contraseña del Login -->
          <div class="form-group">
            <div class="input-group">
              <label class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
              </label>
              <input type="password" class="form-control" name="pass" required placeholder="Contraseña"/>
            </div>
          </div>
          <div class="form-group" align="center">

             <button class="btn btn-success" name="entrar" id="entrar">

              <span class="glyphicon glyphicon-log-in"></span> Entrar
            </button>
          </div>
        </form>
      </div>
  </div>
</div>
<?php


 ?>
<footer>
  UTESA By <a href="#">Amply Code</a>
</footer>
</body>
</html>
