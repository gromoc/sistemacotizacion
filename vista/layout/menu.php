
<center>
    <div class="tablainicio">
        <table class="boton8">
            <tr>
                <td class="fila_superior1">
                    <a href="index.php">
                        <img class="imagenfilasuperior1" src="<?= base_url_img."left-fold.png ";?>" alt="">
                    </a>
                </td>
                <td class="fila_superior2">EMPRESA DE FABRICACION DE ESTRUCTURAS METALICAS DE: HENRRY HOLMES PAYTAN CARREÑO</td>
                <td class="fila_superior3">
                    <a href="index.php">
                        <img class="imagenfilasuperior3" src="<?= base_url_img."left-fold.png ";?>" alt="">
                    </a>
                </td>
            </tr>
        </table>
        <table class="boton9">
            <tr class="boton2">
                <td colspan="2">
                    <a href="index.php">
                        <button class="estilo1" style="background-color: #CCFFFF;" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#CCFFFF'">Inicio</button>
                    </a>
                    <a href="index.php?sec=vNosotros">
                        <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Nosotros</button>
                    </a>
                    <a href="index.php?sec=vUbicacion">
                        <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Ubicanos</button>
                    </a>
                    <a href="index.php?sec=vContactanos">
                        <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Contáctanos</button>
                    </a>
                    <a href="index.php?sec=vCotizacion">
                        <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Cotizar</button>
                    </a>
                    <a href="index.php?sec=vLogin">
                        <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Registrate</button>
                    </a>
                </td>
            </tr>
        </table>
        <?php
        if(isset($_SESSION['user'])){
            echo "<div>BIENVENIDO".$_SESSION['user']."</div>";
        }
        ?>
      
    </div>
    <br>
    <br>
    <br>
    <br>
    <a class="msg1">Caminamos de la mano con la tecnología</a>
    <div class="slide-banner-left">
        <img class="slide-img" />

        <div id="slideshow">
            <div>
                <a onmouseover="this.style.background='#CECEF6'" onmouseout="this.style.background='white'" class="letrasinicio">BIENVENIDOS A LA PAGINA WEB MAS INNOVADORA</a>
            </div>
            <div>
                <a onmouseover="this.style.background='#CECEF6'" onmouseout="this.style.background='white'" class="letrasinicio">DONDE PUEDES COTIZAR TUS PRODUCTOS Y SERVICIOS ONLINE</a>
            </div>
            <div>
                <a onmouseover="this.style.background='#CECEF6'" onmouseout="this.style.background='white'" class="letrasinicio">NO NECESITAS MOVERTE DE TU CASA PARA AVERIGUAR PRECIOS</a>
            </div>
        </div>
        <div class="banner-head">
        </div>
    </div>
</center>