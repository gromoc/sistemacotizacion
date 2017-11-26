<?php 
include ('../controlador/cRegistro.php');
$class= new cRegistro();
?>

<?php 
    if(isset($_GET['msj']))
    {
        if($_GET['msj']=='ok'){
            echo $mensaje= "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> Se registro el usuario correctamente</div>";
        }else{
            echo $mensaje= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> Hubo un error al momento de registrar</div>";
        }


    }

    if(isset($_GET['action'])){
        echo "<h2>HOLA</h2>";
    }
?>
<div class="panel panel-default">
    <div class="panel-heading">Mantenimiento de Usuarios</div>
    <div class="panel-body">
        <div class="col-md-6">
            <form action="../controlador/cRegistro.php" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;"
                enctype="multipart/form-data">
                <label for="">Nombre o Razon Social</label>
                <input class="form-control" type="text" name="txtnombrersocial" autocomplete="off" value="" style="width:100%;"
                placeholder='Ingrese el Nombre o Razon Social' required/>

                <label for="">DNI o RUC de la empresa</label>
                <input class="form-control" type="number" name="txtdniruc" autocomplete="off" value="" style="width:100%;" 
                placeholder='Ingrese DNI o RUC' required/>

                <label for="">Email</label>
                <input class="form-control" type="email" name="txtemail" autocomplete="off" value="" placeholder='Ingrese Email'
                    style="width:100%;" required/>

                <label for="">Telefono</label>
                <input class="form-control" type="number" name="txttelefono" autocomplete="off" value="" placeholder='Ingrese Email'
                    style="width:100%;" required/>

                <label for="">Usuario</label>
                <input class="form-control" type="text" name="txtnomusuario" autocomplete="off" value="" placeholder='Ingrese Usuario'
                    style="width:100%;" required/>
                <label for="">Contraseña</label>
                <input class="form-control" type="password" ame="txtpassusuario" autocomplete="off" value="" placeholder='Ingrese Contraseña'
                    style="width:100%;" required/>
                <br>
                <input type="hidden" name="tipoform" value="registroadmin">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>
            </form>
        </div>
    </div>
</div>


<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Usuarios Registrados</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
                                    <th style="text-transform: uppercase">Accion</th>
									<th style="text-transform: uppercase">Cliente</th>
									<th style="text-transform: uppercase">Documento</th>
									<th style="text-transform: uppercase">Tipo Documento</th>
									<th style="text-transform: uppercase">Email</th>
                                    <th style="text-transform: uppercase">Telefono</th>
                                    <th style="text-transform: uppercase">Usuario</th>
								</tr>
							</thead>
                            <?php  foreach($class->obtenerUsuarios() as $row):  ?>
                            <tr style="text-transform: uppercase">
                            <td>
											<a href="?sec=vUsuarios&action=editar"  title="Editar Usuario"> <span class='fa fa-2x fa-pencil-square-o'></span></a>
			                                <a href="?action=eliminar&intidproducto=<?php echo "" ?>"  title="Eliminar Usuario"><span class="fa fa-2x fa-trash"></span></a>
			                    </td>
                                <td><?php echo $row['nombrersocial'];  ?></td> 
                                <td><?php echo $row['dniruc'];  ?></td> 
                                <td><?php echo $row['tipodoc'];  ?></td> 
                                <td><?php echo $row['email'];  ?></td> 
                                <td><?php echo $row['numero'];  ?></td> 
                                <td><?php echo $row['cUsuUsuario'];  ?></td> 
                            <tr>   
                            <?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>