<?php 

class Venta {
	public $tabla = "productos";


	/**
	 * Insert
	 */
	public function insert($objeto) {

		// abrir conexión BD
		$conexion = new Conexion();

		//insertar 
		$sql = "INSERT INTO " . $this->tabla . " (id_venta, estatus, FechaCreacion, usuario_id, tipo_operacion_id, carritocompra) VALUES 
			('{$objeto->id_venta}', '{$objeto->estatus}','{$objeto->FechaCreacion}','{$objeto->usuario_id}','{$objeto->tipo_operacion_id,,'{$objeto->carritocompra}'}')";

		// ejectuar consulta
		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();
	}



	/**
	 * Find by ID
	 */
	public function findByID($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$id_venta}";
		return $sql;

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

		return mysqli_fetch_object($consulta);

	}


	/**
	 * Find All
	 */
	public function findAll() {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$id_venta}";
		return $sql;

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

		$resultados = array();
		while ($row = mysqli_fetch_object($consulta)) {
			$resultados[] = $row;
		}

		return $resultados;	

	}


	/**
	 * Delete
	 */
	public function delete($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "DELETE FROM " . $this->tabla . " WHERE id={$id_venta}";

		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

	}


	/**
	 * Actualizar
	 */
	public function update($objeto) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "UPDATE " . $this->tabla . " SET estatus='{$objeto->estatus}', FechaCreacion='{$objeto->FechaCreacion}', usuario_id='{$objeto->usuario_id}' WHERE id={$objeto->id_venta}";
		// ejectuar consulta
		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

	}

}