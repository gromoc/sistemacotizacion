<?php 
ob_start();
include ('../controlador/cProducto.php');
?>

<style>
    .form-group {
        text-align: left;
    }

    .form-group>label {
        font-weight: 500;
        padding-bottom: 5px;
    }

    #panel-login .form-group {
        text-align: center;
    }
</style>

<?php if(isset($_GET['pro'])): ?>

<?php 
$class= new cProducto();
$result = $class->getProductForId($_GET['pro']);

?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">FORMULARIO DE COTIZACION</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="../../controlador/cProducto.php" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;"
                            enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre cliente</label>
                                        <input class="form-control" type="text" name="nvchproducto" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese el nombre del producto'
                                            required/>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input class="form-control" type="text" name="nvchdescripcion" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese descripcion del producto'
                                            required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Dni</label>
                                        <input class="form-control" type="text" name="nvchdescripcion" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese descripcion del producto'
                                            required/>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <h2>DATOS DEL PRODUCTO</h2>
                                 
                                </div>

                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">NOMBRE DEL PRODUCTO</label>
                                        <input class="form-control" type="text" name="nvchcantidad" autocomplete="off" value="" placeholder='Ingrese distribuidor'
                                            style="width:100%;" required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                        <label for="">CÓDIGO</label>
                                        <input class="form-control" type="text" name="nvchcantidad" autocomplete="off" value="" placeholder='Ingrese distribuidor'
                                            style="width:100%;" required/>
                                </div>
                                <div class="col-md-2">
                                        <label for="">ANCHO</label>
                                        <input class="form-control" type="text" name="nvchcantidad" autocomplete="off" value="" placeholder='Ingrese distribuidor'
                                            style="width:100%;" required/>
                                </div>
                                <div class="col-md-2">
                                        <label for="">ALTO</label>
                                        <input class="form-control" type="text" name="nvchcantidad" autocomplete="off" value="" placeholder='Ingrese distribuidor'
                                            style="width:100%;" required/>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>PERSONALIZAR MI PRODUCTO</h2>                              
                                </div>
                            </div>
                            <div class="space"></div>
                                <div class="col-md-12">
                                    <p>LOS DATOS DEL CLIENTE SE JALARAN DE LA SESSION Y LOS DATOS DEL PRODUCTO DEL CODIGO GET RECIBIDO EL CLIENTE DEBERA INGRESAR DATOS DE SUS MEDIDAS REQUERIDAS COLOR Y OTROS DEPENDIENDO EL TIEPO DE PRODUCTO</p>
                                <p>PERSONALIZAR MI PRODUCTO</p>
                                </div>

                            <br>
                            <input type="hidden" name="tipoform" value="nuevo">
                            <button type="submit" id="enviar" name="enviar" class="btn btn-default">Guardar</button>
                            <button type="reset" class="btn btn-danger">Limpiar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
</div>

<?php endif; ?>