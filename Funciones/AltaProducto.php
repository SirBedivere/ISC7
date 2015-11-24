<?php

require_once ('../Conexion/Conexion.php');
require_once ('../Beans/Producto.php');
require_once ('../Service/ProductoServicio.php');



	$Nombre=$_POST['Nombre'];
	$Descripcion=$_POST['Descripcion'];
	$InventarioMin=$_POST['InventarioMin'];
	$PrecioEntrada=$_POST['PrecioEntrada'];
	$PrecioSalida=$_POST['PrecioSalida'];
	
	$FechaCreacion=$_POST['FechaCreacion'];
	
	$ProductoServicio = new ProductoServicio();
	

		
	$Producto = new Producto();
	$Producto->Nombre=$Nombre;
	$Producto->Descripcion=$Descripcion;
	$Producto->InventarioMin=$InventarioMin;
	$Producto->PrecioEntrada=$PrecioEntrada;
	$Producto->PrecioSalida=$PrecioSalida;
	
	$Producto->FechaCreacion=$FechaCreacion;
	
	
	$ProductoServicio->insert ($Producto);
	
		header ("Location: http://localhost/ISC7/views/altaProducto.php");
	die();
	
?>