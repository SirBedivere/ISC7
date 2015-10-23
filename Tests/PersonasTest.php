<?php
	include("../Servicio/PersonasServicios");
	
	$persona= new Persona();
	
	$personasServicios = new PersonasServicios();

	
	$persona->idPersonas=$PersonasServicios->findById(1);
	$persona->direccion=$resultado->findById(1);
	$persona->telefono=$resultado->findById(1);
	$persona->cumpleaños=$resultado->findById(1);
	$persona->estatus = 1;
	$persona->fechaCreacion = getdate();


?>