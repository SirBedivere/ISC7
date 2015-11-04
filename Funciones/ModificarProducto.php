<?php

require_once ('../Conexion/Conexion.php');
require_once ('../Beans/Producto.php');
require_once ('../Service/ProductoServicio.php');


	$ProductoServicio = new ProductoServicio();

	$productoBean=$ProductoServicio->obtenerPorId($_POST['idProducto']);

	$productoBean->CodigoBarras=$_POST['CodigoBarras'];
	$productoBean->Nombre=$_POST['Nombre'];
	$productoBean->Descripcion=$_POST['Descripcion'];
	$productoBean->Precio=$_POST['Precio'];
	
	$ProductoServicio->update($productoBean);
	
	header('Location: ../Views/modificarProducto.php');
	die();
?>