<?php

require_once ('../Conexion/Conexion.php');
require_once ('../Beans/Producto.php');
require_once ('../Service/ProductoServicio.php');



	$CodigoBarras=$_POST['CodigoBarras'];
	$Nombre=$_POST['Nombre'];
	$Descripcion=$_POST['Descripcion'];
	
	$ProductoServicio = new ProductoServicio();
	

		
	$Producto = new Producto();
	$Producto->CodigoBarras=$CodigoBarras;
	$Producto->Nombre=$Nombre;
	$Producto->Descripcion=$Descripcion;
	
	$ProductoServicio->insert ($Producto);
	
	header('Location: ../Views/altaProducto.php');
	die();
?>