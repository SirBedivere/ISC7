<?php

class Categoria{

	public function insert($objeto) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "INSERT INTO " . $this->tabla . " (id_categoria, status, fecha_creacion) VALUES ('{$objeto->id_categoria}','{$objeto->status}','{$objeto->fecha_creacion}')";
		$sql = $dao->insert($objeto);

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
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$id_categoria}";
		$sql = $dao->findByID($id);

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
		$sql = "SELECT * FROM " . $this->tabla;
		$sql = $dao->findAll($id);

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
		$sql = "DELETE FROM " . $this->tabla . " WHERE id={$id_categoria}";
		$sql = $dao->delete($id);

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
		$sql = "UPDATE " . $this->tabla . " SET usuario='{$objeto->id_categoria}', password='{$objeto->status}', direccion='{$objeto->fecha_creacion}' WHERE id={$objeto->id_categoria}";
		$sql = $dao->update($objeto);

		// ejectuar consulta
		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

	}

}
?>