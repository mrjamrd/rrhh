<!--inicio crear usuarios-->
<div id="formulario-user" title="Crear Usuario">
<form id="crear-user">
  <div class="form-group">
    <label for="exampleInputEmail1">text</label>
    <input type="text" name="nombre" class="form-control" id="nombre"  placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <p><span></span>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contrase"></p>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <p><span></span>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono"></p>
  </div>
  <button type="button" id="btn-usuario" class="btn btn-success">Guardar</button>
</form>
  <div class="alert" role="alert">

  </div>
</div>
<!--fin de crear usuarios-->

<!-- crear empleados-->
<div id="form-empl" class="" title="Crear Empleado">
  <form action="" method="post" name="form">
    <div class="row">
      <div class="col-md-4">
       <div class="col-md-4">

       </div>
       <div class="col-md-4">

       </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Codigo del empleado</label>
          <input type="text" class="form-control" name="" id="" placeholder="codigo">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nombre del Empleado</label>
          <input type="text" class="form-control" name="" id="" placeholder="Nombre">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Cedula del empleado</label>
          <input type="text" class="form-control" name="" id="" placeholder="Cedula">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Dirección del Empleado</label>
          <input type="text" class="form-control" name="" id="" placeholder="Dirección">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Telefono del Empleado</label>
          <input type="text" class="form-control" name="" id="" placeholder="telefono">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">E-mail del Empleado</label>
          <input type="text" class="form-control" name="" id="" placeholder="Correo">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Fecha del ingreso del Empleado</label>
          <input type="date" class="form-control" name="" id="" placeholder="Fecha de Ingreso">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Horario regular del Empleado</label>
          <select class="form-control" name="horregular">
             <option value="">Elija Horario de trabajo</option>
             <option value="">8:00 AM A 12:00 PM & 2:00 PM A 6:00 PM</option>
             <option value="">8:00 AM A 12:00 PM & 3:00 PM A 7:00 PM</option>

          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Horario sabatino del Empleado</label>
          <select class="form-control" name="horsabatino">
             <option value="">Elija Horario de trabajo</option>
             <option value="">8:00 AM a 12:00 pm</option>
             <option value="">1:00 PM A 5:00 PM</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Modo de cobro del empleado</label>
          <select class="form-control" name="modecobro">
             <option value="">Elija Modo de Pago</option>
             <option value="">Deposito</option>
             <option value="">Cheque</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
       <div class="col-md-8">
         <div class="form-group">
           <label for="exampleInputPassword1">Observación del Registro</label>
           <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Observacion"></textarea>
         </div>
         </form>
         <button type="" name="button" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"> </span> Guardar</button>
         <button type="" name="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"> </span> Limpiar</button>
         <button type="" name="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
       </div>
      </div>
<!--Fin crear empleado -->
<!-- formulario de crear puesto-->
<div id="form-puesto" title="Crear Puesto">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">text</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contrase">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
  </div>
  <button type="button" class="btn btn-default">Guardar</button>
</form>
</div>
<!--fin de form de crear puesto-->

<!--crear vacaciones -->
<div id="form-vacaciones" title="Crear Vacaciones">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">text</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contrase">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<!--fin de vacaciones-->
<!--Inicio de status empleado-->
<div id="form-status" title="Cambiar Status de Empleado">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">text</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contrase">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<!--fin de status empleado-->
<!--Inicio Crear permisos-->
<div id="form-permisos" title="Crear Permisos">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">text</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contrase">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<!--Fin de crear Permisos-->
<!--Inicio Crear Licencia-->
<div id="form-licencia" title="Crear Licencias Medicas">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">text</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contrase">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<!--Fin Crear Licencia-->
<!--Inicio de crear Departamento-->
<div id="form-departamento" title="Crear Departamento">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre De Departamento</label>
    <input type="text" class="form-control" id="nombre_dept" placeholder="Nombre de Departamento">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text</label>
    <textarea name="name" id="obs_dept" rows="3" cols="5"></textarea>
  </div>
  <button type="button" class="btn btn-default">Guardar</button>
</form>
</div>
<!--Final de crear departamento-->
