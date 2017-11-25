<style>
.form-group{
    text-align:left; 
}
.form-group >label{
    font-weight: 500;
    padding-bottom: 5px;
}
#panel-login  .form-group{
    text-align:center; 
}
</style>
<div onload="cargar()" class="fondodemetal">
    <center>
        <div style="padding-top:50px;" class="main-login">

            <?php    
                    if(isset($_GET['mensaje']))
                    {
                    echo $_GET['mensaje'] ;   
                    }
                ?>

            <div id="panel-login" style="width: 350px;" class="panel">
                <div class="panel-heading text-center">
                    <h4 type="text" class="text_menu2" style='text-align: center'>INGRESAR AL SISTEMA</h4>
                </div>
                <div class="panel-body">
                    <form action="../controlador/cRegistro.php" method="POST">
                        <div class="form-group" align="center">
                            <input type="hidden" name="op">

                            <input name="txtusuario" placeholder="Usuario" type="text" align="center" style="width: 300px; height: 30px; margin: auto;"
                                size="30">
                        </div>

                        <div class="form-group" align="center">
                            <input name="txtclave" placeholder="Contraseña" type="password" align="center" style="width: 300px; height: 30px; margin: auto;"
                                size="30">
                        </div>
                        <div class="form-group text-center" >
                            <input type="submit" name="acceso" value="entrar">
                            <!-- <a style="align-content: center; text-align: center; margin: auto;" class="boton" onmouseover="this.style.background='#CCCCFF'"
                                onmouseout="this.style.background='#757575'" style="width:70px; height:70px" title="Ingresar al Sistema"
                               >
                                <img src="../public/imagenes/ingresar.png" style="width:50px; height:50px" border='1'>INGRESAR</a> -->

                       
                           
                            <a style="align-content: center; text-align: center; margin: auto;" class="boton" onmouseover="this.style.background='#CCCCFF'"
                                onmouseout="this.style.background='#757575'" style="width:70px; height:70px" title="Salir" href="javascript:cerrar()">
                                <img src="../public/imagenes/salir.png" style="width:50px; height:50px" border='1'>SALIR</a>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="form-group">
                        <span type="text" class=""> Nuevo usuario?
                            <a href="#" id="mostrar-registro">Registrate aquí</a>
                            <span>
                    </div>
                </div>
            </div>
            <div id="panel-registro" style="width: 450px;" class="panel">
                <div class="panel-heading">
                    <h4 type="text" class="text_menu2" style='text-align: center'>REGISTRESE AL SISTEMA</h4>
                </div>
                <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre o Razon Social</label>
                        <input type="text" class="form-control" name="txtnombrersocial" placeholder="Nombre o Razon social" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">DNI o RUC de la empresa</label>
                        <input type="text" class="form-control" name="txtdniruc" placeholder="DNI o RUC" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="txtemail" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" name="txttelefono" placeholder="Telefono" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Usuario</label>
                        <input type="text" name="txtnomusuario" class="form-control" placeholder="Nombre de ingreso" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña Usuario</label>
                        <input type="password" name="txtpassusuario" class="form-control" placeholder="Contraseña" required autofocus>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-default btn-block" title="Salir" type="submit" value="REGISTRAR">
                    </div>
                </form>
                </div>
            </div>
            <br>
        </div>
    </center>
</div>
<?php 
	$misJs=add_js("JsLogin.js");
?>