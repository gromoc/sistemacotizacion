<html>
    <head>
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet">
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>INGRESAR AL SISTEMA</title>
  <script>
 function grabar()
            {
         document.form.action="../controlador/usuariocontrolador.php";
         document.form.method="GET";
         document.form.op.value="13";
         document.form.submit();
            }

        </script>

    </head>
    <body onload="cargar()" class="fondodemetal">
    <center>
        <div class="tablainicio">
        <table class="boton8">
        <tr>
            <td class="fila_superior1">
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/inicio.php";?>">
                <img class="imagenfilasuperior1" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/left-fold.png";?>" alt="">
                </a>
            </td>
            <td class="fila_superior2">EMPRESA DE FABRICACION DE ESTRUCTURAS METALICAS DE: HENRRY HOLMES PAYTAN CARREÑO</td>
            <td class="fila_superior3">
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/inicio.php";?>">
                <img class="imagenfilasuperior3" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/left-fold.png";?>" alt="">
                </a>
            </td>
        </tr>
        </table>
        </div>
    <hr>
    <br><br><br><br><br><br>
    <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
             
             <table border="10" class="tablaLista">
                    
            <tr>
            <td class="text_normal2" style='text-align: justify'>Nombres</td>
            <td>
            <input type = "text" class = "form-control" 
               name = "txtnombreusuario" placeholder = "nombres" 
               required autofocus>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Apellido Paterno</td>    
            <td>
            <input type = "text" class = "form-control"
               name = "txtapepaterusuario" placeholder = "apellido paterno" required>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Apellido Materno</td>    
            <td>
            <input type = "text" class = "form-control"
               name = "txtapematerusuario" placeholder = "apellido materno" required>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Email</td>    
            <td>
            <input type = "text" class = "form-control"
               name = "txtemail" placeholder = "email" required>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Telefono</td>    
            <td>
            <input type = "text" class = "form-control"
               name = "txttelefono" placeholder = "telefono" required>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Direccion</td>    
            <td>
            <input type = "text" class = "form-control"
               name = "txtdireccion" placeholder = "direccion" required>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Foto</td>
            <td>
            <input type = "text" class = "form-control"
               name = "txtfoto" placeholder = "foto" required>
                </td></tr>
            <tr>
                        <td class="text_normal2" style='text-align: justify'>Nombre Usuario</td>
                        <td><input type="text" name="txtnomusuario" class = "form-control" placeholder = "Nombre de ingreso" required autofocus></td>
                    </tr>
                    <tr>
                        <td class="text_normal2" style='text-align: justify'>Contraseña Usuario</td>
                        <td><input type="password" name="txtpassusuario" class = "form-control" placeholder = "Contraseña" required autofocus></td>
                    </tr>
                    <tr>
                        <td class="text_normal2" style='text-align: justify'>Tipo Usuario</td>
                        <td><select name="txttipousuario" class = "form-control" placeholder = "Tipo De Usuario" required autofocus>
                                <option>ESTUDIANTE</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text_normal2" style='text-align: justify'>Descripcion Usuario</td>
                        <td><input type="text" name="txtdescripusuario" class = "form-control" placeholder = "Descripcion de Usuario" required autofocus></td>
                    </tr>
                    <tr>
                        <td class="text_normal2" style='text-align: justify'>Estado</td>
                        <td><select name="txtestado" class = "form-control" placeholder = "Estado del Usuario (A= Activo, I= Inactivo)" required autofocus>
                                <option>A</option>
                            </select>
                        </td>
                    </tr>
             </table>
             <br><br>
             <button class = "boton" type = "submit" name = "login" onclick="grabar()">REGISTRAR</button>
         </form>
        
        <br><br> 
      </div>
      <a href="./login.php">
        <button    class="estilo1">REGRESAR</button>
        </a>
      <br><br><br><br><br>
    <font class="boton6">
            <?php    
               if(isset($_GET['mensaje']))
               {
                echo $_GET['mensaje'] ;   
               }
            ?> 
        </font>
            </center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
            </form>
    </body>
</html>