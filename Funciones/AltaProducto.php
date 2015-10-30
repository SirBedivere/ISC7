<?php
include("../Service/ProductoServicio.php");

	
	$codigo_de_barra = $_POST['CodigoBarras'];
	$nombre = $_POST['Nombre'];
	$descripcion = $_POST['Descripcion'];
	$precio = $_POST['PrecioEntrada'];
	
	$ProductoServicio = new ProductoServicio();
	
	$ProductoServicio->insert ($Producto);
	
	header('Location ../views/index.php');
	die();
?>