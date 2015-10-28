<?php session_start(); ?>
<html>
	<title>
	
	</title>
		
		<head>
			<meta charset=utf-8>
			<script src="../Css/jquery.min.js">
			</script>
			<link rel="stylesheet" href="../Css/bootstrap/css/bootstrap.min.css"/>
			<link rel="stylesheet" href="../Css/bootstrap/css/bootstrap-theme.min.css"/>
			<script src="../Css/bootstrap/js/bootstrap.min.js">
			</script>
			<link rel="stylesheet" type="text/css" href="../Css/main.css"/>		
			
		</head>
		
			<body>
				<div class="row">
					<div class="col-md-2 col-xs-2 col-sm-2">
					</div>
				
					<div class="col-md-1 col-xs-1 col-sm-1">
						<img src="../Css/logo.jpg" width="100" height="100" class="img-responsive">
					</div>
					<div class="col-md-7 col-xs-7 col-sm-7" >
						<div class="row">
							<div class="col-md-8 col-xs-8 col-sm-8">
						
							</div>
							<div class="col-md-4 col-xs-4 col-sm-4">
								<?php
								$usuarioBean=$_SESSION['usuarioBean'];
								if ($usuarioBean!=null){
									echo "Usuario: ".$_SESSION['usuarioBean']->nombre;
								}else ?>
								<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
									Iniciar Sesión
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-xs-8 col-sm-8">
								<button class="btn btn-primary glyphicon glyphicon-th-large btn" type="button" >
								Inicio
								</button>
									
								<button class="btn btn-primary glyphicon glyphicon-envelope btn" type="button">
								Contacto
								</button>
									
								<button class="btn btn-primary glyphicon glyphicon-globe btn" type="button">
								Sucursales
								</button>
									
								<button class="btn btn-primary glyphicon glyphicon-user btn" type="button" >
								Categorias
								</button>
							</div>
							<div class="col-md-4 col-xs-4 col-sm-4">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Buscar">
									<span class="input-group-btn">
									<button class="btn btn-default" type="button">Ir</button>
							  		</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-xs-2 col-sm-2">
					</div>
				</div>
			<?php include("Modal.php"); ?>
		