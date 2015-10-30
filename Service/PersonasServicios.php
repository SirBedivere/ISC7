<?php 

include("../Conexion/Conexion.php");
include("../Beans/Personas.php");

class PersonasServicio {


	/**
	 * Insertar
	 */
	public function insertar($objeto) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "INSERT INTO " .$this->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion)";

		// ejectuar consulta
		return $conexion->ejecutar($sql);
	}



	/**
	 * Obtener por ID
	 */
	public function ObtenerPorID($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "SELECT * FROM " .$this->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion)";

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		return $conexion->ejecutar($sql);

	}


	/**
	 * Obtener Todos
	 */
	public function ObtenerTodos() {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "SELECT * FROM " .$this->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion)";

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
	return $conexion->ejecutar($sql);
	}


	/**
	 * Eliminar
	 */
	public function Eliminar($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "DELETE " .$this->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion)";

		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		return $conexion->ejecutar($sql);

	}


	/**
	 * Actualizar
	 */
	public function update($objeto) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "UP DATE " .$this->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion)";

		// ejectuar consulta
		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		return $conexion->ejecutar($sql);

	}
	/**
	 * Obtener por Nombre
	 */
	public function ObtenerPorNombre($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "SELECT * FROM " .$this->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion)";

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		return $conexion->ejecutar($sql);

	}
	
	private function crearObjeto($resultado){
		$personas = new Personas();
		$persona->idPersonas=$resultado->idPersonas;
		$persona->direccion=$resultado->direccion;
		$persona->telefono=$resultado->telefono;
		$persona->cumpleaños=$resultado->cumpleaños;
		$persona->estatus=$resultado->estatus;
		$persona->fechaDeCreacion=$resultado->fechaDeCreacion;

		
		return persona;
	}
	
	
	
	
	
	
	

}