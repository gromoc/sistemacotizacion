<br>
    <br>
    <br>
    <hr>
    <hr>
    <hr>
    <div class="main">
        <div class="about section" id="section-2">
            <div class="container">
            </div>
        </div>
        <div class="portfolio section" id="section-3">
            <ul class="portfolio_grids">
                <li>
                    <div class="view view-fifth">
                        <div class="mask">
                            <div class="mask1">
                                <a class="popup-with-zoom-anim" href="#small-dialog1">
                                    <div class="estilopropio" onmouseover="this.style.background='#336699'" onmouseout="this.style.background='black'">
                                        O DIBUJA TU PROPIO MODELO</div>
                                </a>
                                <div id="small-dialog1" class="mfp-hide">
                                    <div class="pop_up1">
                                        <center>
                                            PARA ACCEDER A NUESTRO SERVICIO DE COTIZACION DEBES REGISTRARTE
                                            <br>
                                            <br>
                                            <form method='POST' valign="top" cellpadding="0">
                                                <table border="10" class="tablaLista" style="margin: auto;">
                                                    <tr>
                                                        <td class="text_normal2" style='text-align: justify'>Nombre o Razon Social</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="txtnombrersocial" placeholder="Nombre o Razon social" required autofocus>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_normal2" style='text-align: justify'>DNI o RUC de la empresa</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="txtdniruc" placeholder="DNI o RUC" required autofocus>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_normal2" style='text-align: justify'>Email</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="txtemail" placeholder="Email" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_normal2" style='text-align: justify'>Telefono</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="txttelefono" placeholder="Telefono" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_normal2" style='text-align: justify'>Nombre Usuario</td>
                                                        <td>
                                                            <input type="text" name="txtnomusuario" class="form-control" placeholder="Nombre de ingreso"
                                                                required autofocus>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_normal2" style='text-align: justify'>Contraseña Usuario</td>
                                                        <td>
                                                            <input type="password" name="txtpassusuario" class="form-control"
                                                                placeholder="Contraseña" required autofocus>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <br>
                                                <table border="10">
                                                    <tr>
                                                        <td>
                                                            <br>
                                                            <input id="enviar" class="estilopropio" type="submit" onmouseover="this.style.background='#336699'"
                                                                onmouseout="this.style.background='black'" name="enviar" value="LISTO">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                            <?php
            if (isset($_POST['enviar'])){
                $nombrersocial = $_POST['txtnombrersocial'];
                $dniruc = $_POST['txtdniruc'];
                $email = $_POST['txtemail'];
                $telefono = $_POST['txttelefono'];
                $nomusuario = $_POST['txtnomusuario'];
                $password = $_POST['txtpassusuario'];
                $consulta = "INSERT INTO cliente (nombrersocial,dniruc,email,telefono,nomusuario,password,tipousuario) VALUES ('$nombrersocial','$dniruc','$email','$telefono','$nomusuario','$password','cliente')";
                $ejecutar = $conexion->query($consulta);
                if ($ejecutar){
                    $mensaje= 'Registrado exitosamente!';
                    header('Location:../vista/creardibujo.php?mensaje='.$mensaje);
                }
                else {
                    $mensaje= 'Ingreso mal algun dato, vuelva a intentarlo!';
                    header('Location:../vista/cotizarpuerta.php?mensaje='.$mensaje);
                }
            }
            ?>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <font class="estilopropio8">
        <?php if(isset($_GET['mensaje'])){echo $_GET['mensaje'];}?>
    </font>