


<?php 
	require_once("../Conexion/Conexion.php");
	require_once("../Beans/Usuario.php");
	require_once("../Service/UsuarioServicio.php");
		
	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Correo=$_POST['Correo'];
	$Contrasena=$_POST['Contrasena'];
	
	
	$UsuarioServicio = new UsuarioServicio();
	
	
	$Usuario = new Usuario();
	
	$Usuario->Nombre=$Nombre;
	$Usuario->Apellido=$Apellido;
	$Usuario->Correo=$Correo;
	$Usuario->Contrasena=$Contrasena;
	
	
	
	$UsuarioServicio->insert($Usuario);
	
	
	header ("Location: http://localhost/ISC7/views/mensaje.php");
	
?> 