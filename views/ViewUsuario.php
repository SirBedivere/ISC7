<html>
	<head>
		<title>Registro de Usuario</title>
	</head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<body>
		<form id="formulario" action="enviado.php" method="post">
			<fieldset>
				<legend>Registro de Usuario</legend>
					<label>Nombre</label>
						<input id="campo1" name="nombre" type="text" /><br><br>
					<label>Apellido</label>
						<input id="campo2" name="apellido" type="text" /><br><br>
					<label>Email</label>
						<input id="campo3" name="email" type="text" /><br><br>
					<label>Contraseña</label>
						<input id="campo4" name="contraseña" type="password" /><br><br>
					<label>Imagen</label>	
						<form method="post" enctype="multipart/form-data">
						<input type=file size=60 name="file1"><br><br>
					    <img src="smiley.gif" alt="Smiley face" height="42" width="42"><br>
						</form><br>
						
					<input id="campo5" name="enviar" type="submit" value="Enviar" />
					
			</fieldset>
		</form>
		
		<form id="formulario" action="enviado.php" method="post">
			<fieldset>
				<legend>Registro de Persona</legend>
					<label>Direccion</label>
						<input id="campo1" name="direccion" type="text" /><br><br>
					<label>Telefono</label>
						<input id="campo2" name="telefono" type="text" /><br><br>
					<label>Cumpleaños</label>
						<input id="campo3" name="cumpleaños" type="text" /><br><br>
						
					<input id="campo4" name="enviar" type="submit" value="Enviar" />
					
			</fieldset>
		</form>

	</body>
</html>