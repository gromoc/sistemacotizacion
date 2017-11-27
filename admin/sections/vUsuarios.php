<?php 
include ('../controlador/cRegistro.php');
$class= new cRegistro();
$resultado;
?>

<?php 
    if(isset($_GET['msj']))
    {
        if($_GET['msj']=='ok'){
            echo $mensaje= "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> Su transaccion se completo correctamente</div>";
        }else{
            echo $mensaje= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> Hubo un error en la transaccion</div>";
        }
    }

    if(isset($_GET['action'])){

        switch($_REQUEST['action'])
        {
            case 'editar':
            $resultado = $class->obtenerUsuarioEditar($_REQUEST['usu']);
            break;

            case 'eliminar':
            $resultado = $class->eliminarUsuarioAdmin($_REQUEST['usu']);
            break;
        }

      //  echo "<h2>HOLA" .  var_dump($resultado) . "</h2>";
    }
?>
<div class="panel panel-default">
    <div class="panel-heading">Mantenimiento de Usuarios</div>
    <div class="panel-body">
        <div class="col-md-6">
            <form action="../controlador/cRegistro.php" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;"
                enctype="multipart/form-data">
                <label for="">Nombre o Razon Social</label>
                <input class="form-control" type="text" name="txtnombrersocial" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getNombreruc() : ""; ?>" style="width:100%;"
                placeholder='Ingrese el Nombre o Razon Social' required/>

                <label for="">DNI o RUC de la empresa</label>
                <input class="form-control" type="number" name="txtdniruc" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getDniRuc() : ""; ?>" style="width:100%;" 
                placeholder='Ingrese DNI o RUC' required/>

                <label for="">Email</label>
                <input class="form-control" type="email" name="txtemail" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getEmail() : ""; ?>" placeholder='Ingrese Email'
                    style="width:100%;" required/>

                <label for="">Telefono</label>
                <input class="form-control" type="number" name="txttelefono" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getTelefono() : ""; ?>" placeholder='Ingrese Email'
                    style="width:100%;" required/>

                <label for="">Usuario</label>
                <input class="form-control" type="text" name="txtnomusuario" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getUsuario() : ""; ?>" placeholder='Ingrese Usuario'
                    style="width:100%;" required/>
                <label for="">Contraseña</label>
                <input class="form-control" type="<?php echo isset($_REQUEST['action']) ? "text" : "password"; ?>" name="txtpassusuario" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getClave() : ""; ?>" placeholder='Ingrese Contraseña'
                    style="width:100%;" />
                <br>
                <input type="hidden" name="tipoform" value="<?php echo isset($_REQUEST['action']) ? "actualizarusuadmin" : "registroadmin"; ?>">
                <input type="hidden" name="idusuario" value="<?php echo isset($_REQUEST['action']) ? $resultado->getId() : "0"; ?>">
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
											<a href="?sec=vUsuarios&action=editar&usu=<?php echo $row['idusu']; ?>"  title="Editar Usuario"> <span class='fa fa-2x fa-pencil-square-o'></span></a>
			                                <a href="?sec=vUsuarios&action=eliminar&usu=<?php echo $row['idusu']; ?>"  title="Eliminar Usuario"><span class="fa fa-2x fa-trash"></span></a>
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