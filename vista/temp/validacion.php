<?php
  ob_start();
  session_start();// creando la sesion
  ?>
<div id='validar'>
    <a style="color: #1c62c4; width: 80px;">Registrado Exitosamente BIENVENIDO USUARIO</a>
    <br><br><br><br><br><br><br><br>
    <center>
        <a style="color: #1c62c4; font-size: 50px; width: 80px;">BIENVENIDO "USUARIO"</a>
        <br><br>
        <a style="color: red;">Esta función aun no esta disponible, estamos trabajando en esto</a>
        <br><br>
        <a style="color: #1c62c4; font-size: 30px; width: 80px;" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/login.php";?>">
            SALIR
        </a>
    </center>
</div>