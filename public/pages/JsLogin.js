addEventListener(
  "load",
  function() {
    setTimeout(hideURLbar, 0);
  },
  false
);

function hideURLbar() {
  window.scrollTo(0, 1);
}

$(document).ready(function() {
  $("#hide").click(function() {
    $("#element").hide();
  });
  $("#show").click(function() {
    $("#element").show();
  });
});

$(document).ready(function() {
  $("#enviar-btn").click(function() {
    var name = $("input#name").val();
    var message = $("textarea#message").val();
    var dataString = "name=" + name + "&message=" + message;
    $.ajax({
      type: "POST",
      url: "addmessage.php",
      data: dataString,
      success: function() {
        $("#element").hide();
        $("#newmessage").append(
          "<h2>Tu información ha sido recibida correctamente!</h2><table><tr><td>Nombre:</td><td>" +
            name +
            "</td></tr><tr><td>Mensaje:</td><td>" +
            message +
            "</td></tr></table>"
        );
      }
    });
    return false;
  });
});

function enviar() {
  var usu = document.form.txtusuario.value;
  var clave = document.form.txtclave.value;
  if (usu.length == 0) {
    alert("Ingrese Usuario, gracias");
    document.form.txtusuario.focus();
    return;
  } else {
    if (clave.length == 0) {
      alert("Ingrese Clave, gracias");
      document.form.txtclave.focus();
      return;
    } else {
      document.form.action = "<?php echo ";
      //".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/usuariocontrolador.php";?>";
      http: document.form.method = "GET";
      document.form.op.value = "2";
      document.form.submit();
    }
  }
}

function cerrar() {
  document.form.action = "<?php echo ";
  //".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/iniciocontrolador.php";?>";
  http: document.form.method = "GET";
  document.form.op.value = "1";
  document.form.submit();
}

function cargar() {
  document.form.txtusuario.focus();
}

function registrar() {
  document.form.action = "../controlador/creardibujocontrolador.php";
  document.form.method = "GET";
  document.form.op.value = "1";
  document.form.submit();
}

function ajax() {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById("mensaje").innerHTML = req.responseText;
    }
  };
  req.open("GET", "validacion.php", true);
  req.send();
}


var login = (function(login , undefined){
var _disable= true;

login.pageLoad = function(){
    $("#panel-registro").hide();
    $("#mostrar-registro").click(function (e) { 
        e.preventDefault();
        $("#panel-login").hide();
        $("#panel-registro").show();
    });
};

return login;

})(login || {});

$(function() {

    login.pageLoad();

});