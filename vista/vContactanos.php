
    <table class="style2">
        <tr style="margin: auto; display: block; padding: 5px">
            <td class="facebook2">
                <a class="facebook3" target="_blank" href="https://www.facebook.com/henry.paytancarreno">
                    <img style="width: 25px; height: 25px; border: 2px solid blue;" src="../public/imagenes/fb.png"> FACEBOOK
                </a>
            </td>
        </tr>
        <tr>
            <td style="margin: auto; display: block;">
                <font style="font-family: arial black; width: 50%; margin: auto;">NUMEROS DE CONTACTO: </font>
                <font class="texto-quienes-somos" onmouseover="this.style.background='url(../public/imagenes/metal.png) no-repeat center center'"
                    onmouseout="this.style.background=' url(../public/imagenes/metal.png)'">
                    <img style="width:30px; height:30px; align-content: flex-end" src="../public/images/Phone_number.png
                        " alt="" /> 997789832
                    <img style="width:30px; height:30px; align-content: flex-end" src="../public/imagenes/Claro.png" alt="" />
                </font>
                <br>
                <font class="texto-quienes-somos" onmouseover="this.style.background='url(../public/imagenes/metal.png) no-repeat center center'"
                    onmouseout="this.style.background=' url(../public/imagenes/metal.png)'">
                    <img style="width:30px; height:30px; align-content: flex-end" src="../public/images/Phone_number.png" alt="" /> 921469547
                    <img style="width:30px; height:30px; align-content: flex-end" src="../public/imagenes/Bitel.png" alt="" />
                </font>
                <br>
                <font class="texto-quienes-somos" onmouseover="this.style.background='url(../public/imagenes/metal.png) no-repeat center center'"
                    onmouseout="this.style.background=' url(../public/imagenes/metal.png)'">
                    <img style="width:30px; height:30px; align-content: flex-end" src="../public/images/Phone_number.png
                        " alt="" /> 966321800
                    <img style="width:30px; height:30px; align-content: flex-end" src="../public/imagenes/Claro.png" alt="" />
                </font>
                <br>
                <br>
            </td>
        </tr>
        <tr style="width: 90%; margin: auto;">
            <td style="width: 90%; margin: auto;">
                <font style=" font-family: arial black; width: 50%; margin: auto;">CORREOS DE CONTACTO: </font>
            </td>
        </tr>
        <tr style="width: 90%; margin: auto;">
            <td>
                <font class="texto-quienes-somos" onmouseover="this.style.background='url(../public/imagenes/metal.png) no-repeat center center'"
                    onmouseout="this.style.background=' url(../public/imagenes/metal.png)'">
                    henrryhoilmes@gmail.com</font>
            </td>
        </tr>
        <tr style="width: 90%; margin: auto;">
            <td>
                <font class="texto-quienes-somos" onmouseover="this.style.background='url(../public/imagenes/metal.png) no-repeat center center'"
                    onmouseout="this.style.background=' url(../public/imagenes/metal.png)'">
                    reynaldo6621@gmail.com</font>
                <br>
            </td>
        </tr>
    </table>
    </div>
    <table class="tablachat">
        <tr style="margin: auto; display: block;">
            <td style="margin: auto; display: block; font-family: arial black; color: white; text-align: center;">CONTACTENOS</td>
        </tr>
        <tr>
            <td style="margin: auto; display: block;">
                <div class="contenedorchat" style="margin: auto; display: block;">
                    <form method='POST' action="../controlador/cContacto.php" valign="top" cellpadding="0" style="margin: auto; display: block;">
                        <input style="margin: auto; display: block;" type="text" name='nombre' autofocus="autofocus" placeholder="Ingresa su nombre">
                        <input style="margin: auto; display: block;" type="text" name='email' autofocus="autofocus" placeholder="Ingresa su email">
                        <textarea style="margin: auto; display: block; height: 60px;" name='mensaje' placeholder="Ingresa tu Mensaje"></textarea>
                        <br>
                        <input style="margin: auto; display: block;" id="enviar" type="submit" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#CCFFFF'"
                            name="enviar" value="ENVIAR">
                    </form>
                    <div id='caja-chat' onload="ajax();">
                        <div id='chat'></div>
                    </div>
                </div>
            </td>
        </tr>
    </table>