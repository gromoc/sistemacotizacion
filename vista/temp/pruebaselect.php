<style>
div { 
          margin: 2em;
          padding: .5em;
          width: 12em;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
        }

        div > ul { display: none; list-style: none;}
        div:hover > ul {display: block; border-top: 1px solid 
        white;}
        div:hover > ul > li { padding: 5px; border-bottom: 1px solid white;}
        div:hover > ul > li:hover { background: white;}
        </style>
<div>
  Select
  <ul>
    <li><a href="#">Primera opción</a></li>
    <li><a href="#">Segunda opción</a></li>
    <li><a href="#">Tercera opción</a></li>
  </ul>
</div>

<div id="menuvertical">
    <button class="boton-chat">CHAT</button>
            <ul>
        <li align="center" ><a href="#" align="center" >
                            <button class="boton-chat">CHAT</button>
                </a>
        <ul>
            <li>
            <center>
                <div id='contenedor' onload="ajax();">
            <form method='POST' action='index.php' valign="top" cellpadding="0">
                <textarea name='nombre' autofocus="autofocus" placeholder="Ingresa tu Nombre"></textarea>
                <textarea name='mensaje' placeholder="Ingresa tu Mensaje"></textarea>
                <input type="submit" name="enviar" value="enviar">
            </form>
            <div id='caja-chat'>
                <div id='chat'></div>
            </div>
            <?php
            if (isset($_POST['enviar'])){
                $nombre = $_POST['nombre'];
                $mensaje = $_POST['mensaje'];
                $consulta = "INSERT INTO chat (nombre,mensaje) VALUES ('$nombre','$mensaje')";
                $ejecutar = $conexion->query($consulta);
                if ($ejecutar){
                    echo "<embed loop='false' src='chat.mp3' hidden='true' autoplay='true'>";
                }
            }
            ?>
        </div>
            </center>
            </li>                        
        </ul>
        </li>
            </ul>
        </div>