<?php

require_once ('../Conexion/Conexion.php');
require_once ('../Beans/Categoria.php');
require_once ('../Service/CategoriaServicio.php');

	$Nombre=$_POST['Nombre'];
	$Descripcion=$_POST['Descripcion'];
	$FechaCreacion=$_POST['FechaCreacion'];
	
	$CategoriaServicio = new CategoriaServicio();
	

		
	$Categoria = new Categoria();
	$Categoria->Nombre=$Nombre;
	$Categoria->Descripcion=$Descripcion;
	$Categoria->FechaCreacion=$Descripcion;
	
	$CategoriaServicio->insert ($Categoria);
	
	header ("Location: http://localhost/ISC7/views/mensaje.php");
	die();
	

?>