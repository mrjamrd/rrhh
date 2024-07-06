///
$(document).ready(function(){

  $('#formulario-user').dialog({
    autoOpen: false,
    width: 400,
    height: 'auto',
    resizable: false,
    modal: true,
    close: function(){
     $('#formulario-user input[type="text"]').val("");
     $('#formulario-user input[type="password"]').val("");
     $('#alert').html('');
     $('#mensaje').html('');
     }
  });

  $('#crear-user').on('click',function(){
    $('#formulario-user').dialog('open');
  });

//////////////////////////////////////////
// crear empleado
/////////////////////////////////////////
  $('#form-empl').dialog({
    autoOpen: false,
    width: 900,
    height: 'auto',
    modal: true,
    close: function(){
      $('#form-empl input[type="text"]').val('');
      $('#form-empl select').prop('selectedIndex',0);
      $('#form-empl input[type="date"]').val('');
      $('#form-empl textarea').val('');
      $('#alert-emp').html('');
    }
  });

  $('#crear-emp').on('click',function(){
    $('#form-empl').dialog('open');
  });

//////////////////////////////////////////
// crear puesto
/////////////////////////////////////////
  $('#form-puesto').dialog({
    autoOpen: false,
    width: 300,
    height: 'auto',
    resizable:false,
    modal: true,
    close:function(){
    $('#form-puesto input[type="text"]').val('');
    $('#form-puesto select').prop('selectedIndex',0);
    $('#form-puesto textarea').val('');
    $('#alert-puesto').html('');
    $('#mensaje-puesto').html('')
    }
  });

  $('#crear-puesto').on('click',function(){
    $('#form-puesto').dialog('open');
  });
//////////////////////////////////////////
//crear vacaciones
//////////////////////////////////////////
  $('#form-vacaciones').dialog({
  autoOpen: false,
  width: 300,
  height: 'auto',
  resizable: false,
  modal: true,
  close:function(){
    $('#form-vacaciones input[type="text"]').val('');
    $('#form-vacaciones input[type="date"]').val('');
    $('#form-vacaciones textarea').val('');
    $('#alert-vac').html('');
  }
  });

  $('#crear-vaca').on('click',function(){
  $('#form-vacaciones').dialog('open');
  });

///////////////////////////////////////////////
//Cambiar el estado de empleados
///////////////////////////////////////////////
  $('#form-status').dialog({
    autoOpen: false,
    width: 350,
    height: 'auto',
    resizable:false,
    modal: true,
    close: function(){
      $('#form-status input[type="text"]').val('');
      $('#form-status select').prop('selectedIndex',0);
      $('#form-status textarea').val('');
      $('#alert_status').html('');
    }
  });

  $('#cambiar-status').on('click',function(){
    $('#form-status').dialog('open');
  });
////////////////////////////////////////////
// Crear Permisos
////////////////////////////////////////////
$('#form-permisos').dialog({
  autoOpen: false,
  width: 350,
  height: 'auto',
  modal: true,
  close:function(){
    $('#form-permisos input[type="text"]').val('');
    $('#form-permisos input[type="date"]').val('');
    $('#form-permisos textarea').val('');
    $('#alert_permiso').html("");
  }
});

$('#crear-permisos').on('click',function(){
  $('#form-permisos').dialog('open');
});

/////////////////////////////////////////////
//Crear licencia medica
///////////////////////////////////////////
  $('#form-licencia').dialog({
  autoOpen: false,
  width: 350,
  height: 'auto',
  modal: true,
  close:function(){
    $('#form-licencia input[type="text"]').val('');
    $('#form-licencia input[type="date"]').val('');
    $('#form-licencia select').prop('selectedIndex',0);
    $('#form-licencia textarea').val('');
    $('#alert_lic').html('');
  }
  });

  $('#crear-licencia').on('click',function(){
    $('#form-licencia').dialog('open');
  });
///////////////////////////////////////////
//Hacer Backup del sistemas
//////////////////////////////////////////
  $('#form-departamento').dialog({
  autoOpen: false,
  width: 350,
  height: 'auto',
  modal: true,
  close:function(){
    $('#form-departamento input[type="text"]').val('');
    $('#form-departamento select').prop('selectedIndex',0);
    $('#form-departamento textarea').val('');
    $('#alert_dept').html('');
  }
  });

  $('#crear-dept').on('click',function(){
    $('#form-departamento').dialog('open');
  });
/////////////////////////////////////////////////////////////
//enviar
////////////////////////////////////////////////////////////*/
});
