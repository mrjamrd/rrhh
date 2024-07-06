<?php
require_once("include/usuarios.php");
// require_once("form/formulariouser.html");
/*if(!isset($_SESSION["usuario"]))
{
  header('Location: index.php');
  exit;
}
  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UTESA Recinto Mao - Bienvenid@ <?php echo   $_SESSION["usuario"];?></title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="ui/jquery-ui.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/funct.js"></script>
  <script src="js/main.js"></script>
</head>
<body>
<div id="wrapper">
   <header class="">
    <nav class="navbar navbar-default">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">
         <!-- <img alt="UTESA" src="..."> -->
       </a>
     </div>
      <p class="navbar-text navbar-right">
       <a href=""><?php/* echo   $_SESSION["usuario"];*/?></a>

      <a href="salir.php" class=" navbar-link">Salir</a></p>
   </div>

 </nav>
   </header>
<!-- aqui inicia -->
<div id="content">
      <div class="formmularios ">
        <!--inicio crear usuarios-->
        <div id="formulario-user" title="Crear Usuarios">
        <form id="crear-user" action="user.php" method="post" >
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Usuario</label>
            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" name="pass" class="form-control" id="pass" placeholder="Contrase">
          </div>
          <button type="button" onclick="enviar_user();" id="btn-usuario" class="btn btn-success">Guardar</button>
        </form>
         <div id="alert">

         </div>
         <div id="mensaje">

         </div>
        </div>
        <!--fin de crear usuarios-->
        <!-- crear empleados-->
        <div id="form-empl" class="form-empleado" title="Crear Empleado">
          <form name="form-empleado" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="codigo">Codigo del empleado</label>
                  <input type="text" class="form-control" name="codigo" id="codigo" placeholder="codigo">
                </div>
                <div class="form-group">
                  <label for="nombre empleado">Nombre del Empleado</label>
                  <input type="text" class="form-control" name="nombre-emp" id="nombre_emp" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="cedula">Cedula del empleado</label>
                  <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                </div>
                <div class="form-group">
                  <label for="Direcion">Dirección del Empleado</label>
                  <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
                </div>
                <div class="form-group">
                  <label for="telefono">Telefono del Empleado</label>
                  <input type="text" class="form-control" name="telefono_emp" id="telefono_emp" placeholder="telefono">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">E-mail del Empleado</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Correo">
                </div>
                <div class="form-group">
                  <label for="fecha ingreso">Fecha del ingreso del Empleado</label>
                  <input type="date" class="form-control" name="fingreso" id="fingreso" placeholder="Fecha de Ingreso">
                </div>
                <div class="form-group">
                  <label for="horario de empleado">Horario regular del Empleado</label>
                  <select class="form-control" name="horregular" id="horregular">
                     <option value="0">Elija Horario de trabajo</option>
                     <option value="1">8:00 AM A 12:00 PM & 2:00 PM A 6:00 PM</option>
                     <option value="2">8:00 AM A 12:00 PM & 3:00 PM A 7:00 PM</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Horario sabatino del Empleado</label>
                  <select class="form-control" name="horsabatino" id="horsabatino">
                     <option value="0">Elija Horario de trabajo</option>
                     <option value="1">8:00 AM a 12:00 pm</option>
                     <option value="2">1:00 PM A 5:00 PM</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Modo de cobro del empleado</label>
                  <select class="form-control" name="modecobro" id="modecobro">
                     <option value="0">Elija Modo de Pago</option>
                     <option value="1">Deposito</option>
                     <option value="2">Cheque</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <label for="exampleInputPassword1">Observación del Registro</label>
                   <textarea name="obs" class="form-control" id="obs" rows="3" cols="5" placeholder="Observacion"></textarea>
                 </div>
                 </form>
                 <div id="alert-emp" class=""></div>
                 <div id="mensaje-emp" class=""></div>
                 <button type="button" name="btn-add" id="" class="btn btn-success" onclick="enviar_empleado()"><span class="glyphicon glyphicon-floppy-saved"> </span> Guardar</button>
                 <button type="button" name="btn-clear" id="" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"> </span> Limpiar</button>
                 <button type="button" name="btn-cancelar" id="" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
               </div>
              </div>
        <!--Fin crear empleado -->
        <!-- formulario de crear puesto-->
        <div id="form-puesto" title="Crear Puesto">
        <form>
          <div class="form-group">
            <label for="codigoempleado">Nombre de Puesto</label>
            <input type="text" class="form-control" id="puesto" placeholder="Nombre del puesto">
          </div>
          <div class="form-group">
            <label for="deparamento">Departamento</label>
            <select class="form-control" name="departamentos" id="dept">
               <option  value="0">Seleciones Depatamentos</option>
               <option  value="1">Computos</option>
               <option  value="2">Registro</option>
               <option  value="3">Admiciones</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Comentario</label>
            <textarea name="comentario" id="comentario" class="form-control" rows="3" cols="5" placeholder="Comentario"></textarea>
          </div>
          <div id="alert-puesto"></div>
          <div id="mensaje-puesto"></div>
          <button type="Button" onclick="Enviar_puesto();" class="btn btn-success">Guardar</button>
        </form>
        </div>
        <!--fin de form de crear puesto-->
        <!--crear vacaciones -->
        <div id="form-vacaciones" title="Crear Vacaciones">
        <form>
          <div class="form-group">
            <label for="Codigo Empleado">Codigo Empleado</label>
            <input type="text" class="form-control" id="codigo_empv" placeholder="Codigo Empleado">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fecha de Salida</label>
            <input type="date" class="form-control" id="fsalida" placeholder="Fecha de salida">
          </div>
          <div class="form-group">
            <label for="Fecha de Entrada">Fecha de Entrada</label>
            <input type="date" class="form-control" id="fentrada" placeholder="Fecha de Entrada">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Observaciones</label>
          <textarea name="name" id="comentvacaciones" class="form-control" rows="3" cols="3" placeholder="Observaciones"></textarea>
          </div>
          <div id="alert-vac"></div>
          <div id="mensaje-vac"></div>
          <button type="button" class="btn btn-success" onclick="enviar_vacaciones();">Guardar</button>
        </form>
        </div>
        <!--fin de vacaciones-->
        <!--Inicio de status empleado-->
        <div id="form-status" title="Cambiar Status de Empleado">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Codigo Empleado</label>
            <input type="text" class="form-control" id="cod_status" placeholder="Codigo Empleado">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Estado del Empleado</label>
            <select class="form-control" id="est_emp" name="est_emp">
             <option value="0">Selecionas Estado de Empleado</option>
             <option value="1">Activo</option>
             <option value="2">Desactivado</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Observacion</label>
            <textarea name="name" id="obs_status" class="form-control" rows="3" cols="5" placeholder="Observacion"></textarea>
          </div>
          <div id="alert_status"></div>
          <div id="mensaje_status"></div>
          <button type="button" onclick="enviar_status();" class="btn btn-success">Guardar</button>
        </form>
        </div>
        <!--fin de status empleado-->
        <!--Inicio Crear permisos-->
        <div id="form-permisos" title="Crear Permisos">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Cogido Empleado</label>
            <input type="text" class="form-control" name="cod_permiso" id="cod_permiso" placeholder="Cogido Empleado">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fecha de Solicitud</label>
            <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud" placeholder="Fecha de Solicitud">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fecha del Permiso</label>
            <input type="date" class="form-control" id="fecha_permiso" placeholder="Fecha del Permiso">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Observacion</label>
            <textarea name="obs_permiso" id="obs_permiso" class="form-control" placeholder="Observacion" rows="3" cols="5"></textarea>
          </div>
           <div id="alert_permiso"></div>
           <div id="mensaje_permiso"></div>
          <button type="button" class="btn btn-success" onclick="enviar_permiso();">Guardar</button>
        </form>
        </div>
        <!--Fin de crear Permisos-->
        <!--Inicio Crear Licencia-->
        <div id="form-licencia" title="Crear Licencias Medicas">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Codigo de Empleado</label>
            <input type="text" class="form-control" id="cod_lic" placeholder="Codigo de Empleado">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tipo de Licencia Medica</label>
            <select class="form-control" name="tipo_lic" id="tipo_lic">
             <option value="0">Seleciones Licencia</option>
              <option value="1">Lession Fisica</option>
              <option value="2">Virus</option>
              <option value="2">Enfermedades</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fecha Licencia</label>
            <input type="date" class="form-control" id="fecha_lic" placeholder="Fecha Licencia">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Observacion</label>
            <textarea name="name" id="obs_lic" class="form-control" rows="3" cols="5" placeholder="Observacion"></textarea>
          </div>
          <div id="alert_lic"></div>
          <div id="mensaje-lic"></div>
          <button type="button" onclick="enviar_licencia();" class="btn btn-success">Guardar</button>
        </form>
        </div>
        <!--Fin Crear Licencia-->
        <!--Inicio de crear Departamento-->
        <div id="form-departamento" title="Crear Departamento">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre De Departamento</label>
            <input type="text" class="form-control" name="nombre_dept" id="nombre_dept" placeholder="Nombre de Departamento">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tipos de Despartamento</label>
            <select class="form-control" name="tip-dept" id="tip_dept">
              <option value="0">Seleciona Tipo de Departamento</option>
              <option value="1">Servicios</option>
              <option value="2">Administrativo</option>
              <option value="3">operativo y servicos</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Observacion</label>
            <textarea name="name" id="obs_dept" class="form-control" rows="3" cols="5" placeholder="Observacion"></textarea>
          </div>
          <div id="alert_dept"></div>
          <div id="mensaje_dept"></div>
          <button type="button" onclick="enviar_dept();" class="btn btn-success">Guardar</button>
        </form>
        </div>
        <!--Final de crear departamento-->
    </div>
    <div class="row">
      <div class="col-sm-4 col-md-4">
       <div class="thumbnail">
         <img src="img/user.png"  alt="...">
         <div class="caption">
           <h3>Crear Usuarios</h3>
           <p>Agregar Usuarios Nuevos</p>
           <p><a href="javascript:void(0);" id="crear-user" class="btn btn-primary" role="button">Crear</a>
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
           <p><a href="javascript:void(0);" id="crear-emp" class="btn btn-primary" role="button">Crear Emp</a>
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
           <p><a href="javascript:void(0);" id="crear-puesto" class="btn btn-primary" role="button">Crear Puesto</a>
             <a href="" class="btn btn-default" role="button">Visualizar</a></p>
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
           <p><a href="javascript:void(0);" id="crear-vaca" class="btn btn-primary" role="button">Crear Vacaciones</a>
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
           <p><a href="#" id="cambiar-status" class="btn btn-primary" role="button">Cambiar Status</a>
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
           <p><a href="javascript:void(0);" id="crear-permisos" class="btn btn-primary" role="button">Crear Permisos</a>
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
       <p><a href="#" id="crear-licencia" class="btn btn-primary" role="button">Crear Licencia</a>
          <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
     </div>
   </div>
 </div>
 <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
     <img src="img/dept.png" alt="...">
     <div class="caption">
       <h3>Crear Departamento</h3>
       <p>Crear Departamento</p>
       <p><a href="#" id="crear-dept" class="btn btn-primary" role="button">Crear Dept</a>
         <a href="#" class="btn btn-default" role="button">
         Visualizar
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
