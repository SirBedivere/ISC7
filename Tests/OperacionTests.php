<?php
	include("../Servicio/OperacionService");
	include("../Servicio/ProductoService");
	include("../Servicio/VentaService");
	include("../Servicio/TipoOperacionService");
	
	$operacion= new Operacion();
	
	$operacionService = new OperacionService();
	$productoService = new ProductoService();
	$ventaService = new VentaService();
	$tipoOperacionService = new TipoOperacionService();
	
	$operacion->producto = $productoService->findById(1);
	$operacion->tipoOperacion = $tipoOperacionService->findById(1);
	$operacion->venta= $tipoVentaService->findById(1);
	$operacion->descripcion = "Operacion de prueba";
	$operacion->fechaCreacion = getdate();
	$operacion->estatus = 1;
	
?>