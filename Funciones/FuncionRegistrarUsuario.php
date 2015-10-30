<?php 
	include("../Service/UsuarioServicio.php");
	include("../Service/PersonasServicios.php");

	$registrarusuario = new RegistrarUsuario();
	
	// datos usuario
	$objeto = new Usuario();
	$objeto->apellido=$_POS['apellido'];
	$objeto->nombre=$_POST['nombre'];
	$objeto->email=$_POST['email'];
	$objeto->imagen=$_POST['imagen'];
	$objeto->direccion=$_POST['direccion'];
	$objeto->telefono=$_POST['telefono'];
	$objeto->cumpleaños=$_POST['cumpleaños'];
	
	
	$registrarusuario->insertar($objeto);
	header('Location: ../views/index');
	exit;
?> 