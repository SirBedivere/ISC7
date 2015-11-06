<?php 

	include("../Conexion/Conexion.php");
	include("../Beans/Usuario.php");
	include("../Service/UsuarioServicio.php");
	include("../Service/PersonasServicios.php");

	$usuarioServicio = new UsuarioServicio();
	
	// datos usuario
	$objeto = new Usuario();
	$objeto->apellido=$_POST['apellido'];
	$objeto->nombre=$_POST['nombre'];
	$objeto->email=$_POST['email'];
	$persona = new Persona();
	$persona->direccion=$_POST['direccion'];
	$persona->telefono=$_POST['telefono'];
	$persona->cumpleaños=$_POST['cumpleaños'];
	
	
	$usuarioServicio->insertar($objeto);
	header('Location: ../views/index');
	exit;
?> 