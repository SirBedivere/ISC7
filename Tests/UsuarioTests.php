<?php
   include("../Beans/Usuario.php");
   include("../Service/UsuarioServicio.php");

   $usuario = new Usuario();
	$usuario->apellido="Griffin";
	$usuario->nombre="Peter";
	$usuario->email="conocido@conocido.com";
	$usuario->imagen="http://imagen.com";
	$usuarioService= new UsuarioService();
	$usuarioService->insertar($usuario);
?>