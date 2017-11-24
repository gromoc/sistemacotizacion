<?php 
include('../util/init.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- PERSONALIZADO -->
	<link href="<?= base_url_css."bootstrap.css "; ?>" rel="stylesheet">
	<link href="<?= base_url_css."main.css "; ?>" rel="stylesheet">
</head>
<body>

	<div class="col-md-2">
		<div class="row">
		<nav class="navbar navbar-default sidebar" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a>
								ADMIN PANEL
							</a>
						</li>
						<li class="active">
							<a href="#">Home
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios
								<span class="caret"></span>
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span>
							</a>
							<ul class="dropdown-menu forAnimate" role="menu">
								<li>
									<a href="{{URL::to('createusuario')}}">Crear</a>
								</li>
								<li>
									<a href="#">Modificar</a>
								</li>
								<li>
									<a href="#">Reportar</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Informes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Libros
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span>
							</a>
						</li>
						<li>
							<a href="#">Tags
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		</div>

	</div>
	<div class="col-md-10 main">
		<div class="row">
			<ol class="breadcrumb">
				<li class="active">Registro de Productos</li>
			</ol>
		</div>
		<!--/.row-->
		<br>

		<!--registro producto form-->
		<div class="row">
			<div class="col-lg-12">
			 <div id="main">
					<?php 
				if(isset($_GET['sec'])){
					$url= $_GET['sec'].".php";
				}else{
					$url= "vProductos.php";
				}
				include("sections/".$url);
				?>
			 
			 </div>	
			</div>
			<!-- /.col-->
		</div>
		<!-- /.row -->
		<!--end registro form-->

		<!--/.row-->
		<form action="" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;" enctype="multipart/form-data">
			<input type="hidden" name="intidproducto" value="" />
		</form>
		</form>
	</div>
	<!--/.main-->
	<script src="<?= base_url_js."jquery.min.js "; ?>"></script>
	<script src="<?= base_url_js."bootstrap.min.js "; ?>"></script>
	<div id="panel-footer">
		<?php 
        if(isset($misJs)){
            echo $misJs; 
        }
    ?>
	</div>
</body>

</html>