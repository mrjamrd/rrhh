function enviar_user()
{
   var nombre = document.getElementById("nombre").value;
   var usuario = document.getElementById("usuario").value;
   var  pass = document.getElementById("pass").value;
   if(nombre == 0)
   {
     $('#alert').html("Tiene que Completar el campo Nombre");
     $('#mensaje').html('');
     $('#nombre').focus();
     return false;
   }
   else{
    $('#alert').html('');
   }
   if(usuario == 0){
      $('#alert').html("Tiene que Completar el campo Usuario");
      $('#usuario').focus();
      return false;
   }else{
    $('#alert').html('');
   }
   if(pass == 0){
      $('#alert').html("Tiene que Completar el campo Contraseña");
      $('#pass').focus();
      return false;
   }else{
     $('#alert').html('');
     $.ajax({
       type: 'POST',
       url: 'user.php',
       data:('nombre='+nombre+'&usuario='+usuario+'&pass='+pass),
       success:function(respuesta){
          if(respuesta == 1){
            $('#mensaje').html('El Usuario fue Creado correctamente');
             $('#crear-user input[type="text"]').val('');
             $('#crear-user input[type="password"]').val('');
             document.getElementById('nombre').focus();
          }else{
            $('#alert').html('tu mensaje no se puedo enviar');
          }
       }
     });
   }
}
//para el formulario de crear empleados
function enviar_empleado()
{
   var codigo = document.getElementById("codigo").value;
   var nombre_emp = document.getElementById("nombre_emp").value;
   var cedula = document.getElementById("cedula").value;
   var direccion = document.getElementById("direccion").value;
   var telefono_emp = document.getElementById("telefono_emp").value;
   var email = document.getElementById("email").value;
   var fingreso = document.getElementById("fingreso").value;
   var horregular = document.getElementById("horregular").value;
   var horsabatino = document.getElementById("horsabatino").value;
   var horsabatino = document.getElementById("horsabatino").value;
   var modecobro = document.getElementById("modecobro").value;
   var obs = document.getElementById("obs").value;

   if(codigo==0){
    $('#alert-emp').html("Tiene que Completar el campo Codigo");
    $('#codigo').focus();
     return false;
   }else{
     $('#alert-emp').html('');
   }
   if(nombre_emp==0){
     $('#alert-emp').html("Tiene que Completar el campo Nombre");
     $('#nombre_emp').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(cedula==0){
     $('#alert-emp').html("Tiene que Completar el campo Cedula");
     $('#cedula').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(direccion==0){
     $('#alert-emp').html("Tiene que Completar el campo direccion");
     $('#direccion').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(telefono_emp==0){
     $('#alert-emp').html("Tiene que Completar el campo telefono");
     $('#telefono_emp').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(email==0){
     $('#alert-emp').html("Tiene que Completar el campo email");
     $('#email').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(fingreso==0){
     $('#alert-emp').html("Tiene que Completar el campo fecha de ingreso");
     $('#fingreso').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(horregular==0){
     $('#alert-emp').html("Tiene que Completar el campo horiario regular");
     $('#horregular').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(horsabatino==0){
     $('#alert-emp').html("Tiene que Completar el campo horiario Sabatino");
     $('#horsabatino').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(modecobro==0){
     $('#alert-emp').html("Tiene que Completar el campo mode de cobro");
     $('#modopago').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
   if(obs==0){
     $('#alert-emp').html("Tiene que Completar el campo observacion");
     $('#obs').focus();
     return false;
   }else{
    $('#alert-emp').html('');
   }
}
function Enviar_puesto()
{
   var puesto =  document.getElementById('puesto').value;
   var dept =  document.getElementById('dept').value;
   var comentario = document.getElementById('comentario').value;
   if(puesto==0){
      $('#alert-puesto').html("Tiene Que Completar el Campo");
      $('#puesto').focus();
      return false;
   }
   else{
     $('#alert-puesto').html("");
   }
   if(dept==0){
      $('#alert-puesto').html("Tiene Que Completar el Campo");
      $('#dept').focus();
      return false;
   }
   else{
     $('#alert-puesto').html("");
   }
   if(comentario==0){
      $('#alert-puesto').html("Tiene Que Completar el Campo");
      $('#comentario').focus();
      return false;
   }
   else{
     $('#alert-puesto').html("");
   }
}
function enviar_vacaciones()
{
  var codigo_empv = document.getElementById("codigo_empv").value;
  var fsalida = document.getElementById("fsalida").value;
  var fentrada = document.getElementById("fentrada").value;
  var comentvacaciones = document.getElementById("comentvacaciones").value;

  if(codigo_empv==0){
     $('#alert-vac').html("Tiene Que Completar el Campo");
     $('#codigo_empv').focus();
     return false;
  }
  else{
    $('#alert-vac').html("");
  }
  if(fsalida==0){
     $('#alert-vac').html("Tiene Que Completar el Campo");
     $('#fsalida').focus();
     return false;
  }
  else{
    $('#alert-vac').html("");
  }
  if(fentrada==0){
     $('#alert-vac').html("Tiene Que Completar el Campo");
     $('#fentrada').focus();
     return false;
  }
  else{
    $('#alert-vac').html("");
  }
  if(comentvacaciones==0){
     $('#alert-vac').html("Tiene Que Completar el Campo");
     $('#comentvacaciones').focus();
     return false;
  }
  else{
    $('#alert-vac').html("");
  }

}

function enviar_status()
{
    var cod_status = document.getElementById('cod_status').value;
    var est_emp = document.getElementById('est_emp').value;
    var obs_status = document.getElementById('obs_status').value;

    if(cod_status==0){
      $('#alert_status').html('Tiene Que Completar El Campo');
      $('#cod_status').focus();
      return false;
    }else{
      $('#alert_status').html('');
    }
    if(est_emp==0){
      $('#alert_status').html('Tiene Que Completar El Campo');
      $('#est_emp').focus();
      return false;
    }else{
      $('#alert_status').html('');
    }
    if(obs_status==0){
      $('#alert_status').html('Tiene Que Completar El Campo');
      $('#obs_status').focus();
      return false;
    }else{
      $('#alert_status').html('');
    }
}
function enviar_permiso(){
   var cod_permiso = document.getElementById('cod_permiso').value;
   var fecha_solicitud = document.getElementById('fecha_solicitud').value;
   var fecha_permiso = document.getElementById('fecha_permiso').value;
   var obs_permiso =document.getElementById('obs_permiso').value;

   if(cod_permiso ==0){
     $('#alert_permiso').html("Tiene que completar El Campo ");
     $('#cod_permiso').focus();
     return false;
   }else{
     $('#alert_permiso').html("");
   }
   if(fecha_solicitud ==0){
     $('#alert_permiso').html("Tiene que completar El Campo ");
     $('#fecha_solicitud').focus();
     return false;
   }else{
     $('#alert_permiso').html("");
   }
   if(fecha_permiso ==0){
     $('#alert_permiso').html("Tiene que completar El Campo ");
     $('#fecha_permiso').focus();
     return false;
   }else{
     $('#alert_permiso').html("");
   }
   if(obs_permiso ==0){
     $('#alert_permiso').html("Tiene que completar El Campo ");
     $('#obs_permiso').focus();
     return false;
   }else{
     $('#alert_permiso').html("");
   }
}
function enviar_licencia()
{
   var cod_lic = document.getElementById('cod_lic').value;
   var tipo_lic = document.getElementById('tipo_lic').value;
   var fecha_lic = document.getElementById('fecha_lic').value;
   var obs_lic = document.getElementById('obs_lic').value;
   if(cod_lic==0){
     $('#alert_lic').html("Tiene Que Completar El Campo");
     $('#cod_lic').focus();
     return false;
   }else{
     $('#alert-lic').html('');
   }
   if(tipo_lic==0){
     $('#alert_lic').html("Tiene Que Completar El Campo");
     $('#tipo_lic').focus();
     return false;
   }else{
     $('#alert-lic').html('');
   }
   if(fecha_lic==0){
     $('#alert_lic').html("Tiene Que Completar El Campo");
     $('#fecha_lic').focus();
     return false;
   }else{
     $('#alert-lic').html('');
   }
   if(obs_lic==0){
     $('#alert_lic').html("Tiene Que Completar El Campo");
     $('#obs_lic').focus();
     return false;
   }else{
     $('#alert-lic').html('');
   }
}

function enviar_dept(){
 var nombre_dept = document.getElementById('nombre_dept').value;
 var tip_dept = document.getElementById('tip_dept').value;
 var obs_dept = document.getElementById('obs_dept').value;

 if(nombre_dept==0){
   $('#alert_dept').html("Tiene Que Completar el Campo");
   $('#nombre_dept').focus();
   return false;
 }else{
   $('#alert_dept').html('');
 }
 if(tip_dept==0){
   $('#alert_dept').html("Tiene Que Completar el Campo");
   $('#tip_dept').focus();
   return false;
 }else{
   $('#alert_dept').html('');
 }
 if(obs_dept==0){
   $('#alert_dept').html("Tiene Que Completar el Campo");
   $('#obs_dept').focus();
   return false;
 }else{
   $('#alert_dept').html('');
 }
}
