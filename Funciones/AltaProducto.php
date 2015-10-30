<?php
include("../Service/ProductoServicio.php");

	
	$codigo_de_barra = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	
	$ProductoServicio = new ProductoServicio();
	
	$ProductoServicio->insert ($Producto);
	
	header('Location ../views/index.php');
	die();
?>