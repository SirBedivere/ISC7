<html>
	<head>
		<script src="jquery.min.js">
		</script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

		<script src="bootstrap/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="main.css">

	</head>
	<body>
	<form method="../Funciones/actualizarUsaurio.php" action="">
				<?php $usuarioBean= $_SESSION['usuarioBean']?>
			<input type="hidden" name="idUsuario" value="<?php $usuarioBean->idUsuario?>" />
		      <div class="row">
			      <div class="col-md-3 col-xs-3">
			      </div>
			      <div class="col-md-6 col-xs-6">
			      		<label class="col-md-4 col-xs-4">Apellido</label> <input type="text" name="apellido" value="<?php $usuarioBean->apellido?>" />
			      </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   </div>
			</br>

		      	<div class="row">
			      <div class="col-md-3 col-xs-3">
			      </div>
			      <div class="col-md-6 col-xs-6">
			      		<label class="col-md-4 col-xs-4">Nombre</label> <input type="text" name="nombre" value="<?php $usuarioBean->nombre?>" /> 
			      </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   	</div>
			</br>

			<div class="row">
			      <div class="col-md-3 col-xs-3">
			      </div>
			      <div class="col-md-6 col-xs-6">
			      		<label class="col-md-4 col-xs-4">Email</label> <input type="text" name="email" value="<?php $usuarioBean->email?>" />
			      </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   </div>
			</br>
			<div class="row">
			      <div class="col-md-3 col-xs-3">
			      </div>
			      <div class="col-md-6 col-xs-6">
			      		<label class="col-md-4 col-xs-4">Imagen</label> <input type="text" name="imagen" value="<?php $usuarioBean->imagen?>" />
			      </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   </div>
			</br>

			<div class="row">
			      <div class="col-md-3 col-xs-3">
			      </div>
			      <div class="col-md-6 col-xs-6">
			      		<label class="col-md-4 col-xs-4">Password</label> <input type="Password" name="password" value="<?php $usuarioBean->password?>" />
			      </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   </div>
			</br>

			   <div class="row">
			      <div class="col-md-4 col-xs-4">
			      </div>
			      <div class="col-md-5 col-xs-5">
			   			<button type="button" class="btn btn-default">Guardar</button>
		       			<button type="button" class="btn btn-primary">Cancelar</button>
		       </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   </div>

			   
			   	
	</form>

	</body>
</html>