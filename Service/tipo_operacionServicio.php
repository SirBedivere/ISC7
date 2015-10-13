<?php

class tipo_operacion {

	public $tabla = "tipo_operacion";

	public function insert($objeto) {
		$conexion = new Conexion();
		$sql = "INSERT INTO " . $this->tabla . " (id, nombre, descripcion) VALUES ('{$objeto->id}','{$objeto->nombre}','{$objeto->descripcion}')";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
		
	}

	public function update($objeto) {
		$conexion = new Conexion();
		$sql = "UPDATE " . $this->tabla . " SET nombre='{$objeto->nombre}', descripcion='{$objeto->descripcion}' WHERE id={$objeto->id}";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
	}

	public function delete($id) {
		$conexion = new Conexion();
		$sql = "DELETE FROM " . $this->tabla . " WHERE id={$id}";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
	}

	public function findByID($id) {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$id}";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
	}

	public function findAll() {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla;
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
	}


}
?>