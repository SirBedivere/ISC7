<?php
   include("../Beans/Usuario.php");
   include("../Service/UsuarioServicio.php");

   $objeto = new Usuario();
	$objeto->apellido="Griffin";
	$objeto->nombre="Peter";
	$objeto->email="conocido@conocido.com";
	$objeto->imagen="http://imagen.com";
	$usuarioService= new UsuarioServicio();
	$usuarioService->insertar($objeto);
?>