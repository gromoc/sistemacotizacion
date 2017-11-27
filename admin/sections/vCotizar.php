

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
                                        <input class="form-control" type="text" value="" readonly />
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input class="form-control" type="text" value="" readonly />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Dni</label>
                                        <input class="form-control" type="text" value="" readonly/>
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
                                        <input class="form-control" type="text" value="" readonly style="width:100%;" required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">CÓDIGO</label>
                                    <input class="form-control" type="text" value="" readonly style="width:100%;" required/>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">ANCHO</label>
                                        <input class="form-control" type="text" value="" readonly/>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">ALTO</label>
                                        <input class="form-control" type="text" value="" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>PERSONALIZAR MI PRODUCTO</h2>
                                </div>
                            </div>
                            <div class="space"></div>

                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-center img-responsive" src="" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">ANCHO (m)</label>
                                                <input class="form-control" type="text" value="" />
                                                <small>Ingrese su medida</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">ALTO (m)</label>
                                                <input class="form-control" type="text" value="" />
                                                <small>Ingrese su medida</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">COLOR </label>
                                                <input class="form-control" type="color" />
                                                <small>Ingrese su color</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space"></div>

                                    
                                    <div class="space"></div>
                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">DETALLE </label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <textarea name="" style="width:100%;heigth:35px !important"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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