<?php

class Operacion {

	public $tabla = "operacion";

	public function insert($objeto) {
		$conexion = new Conexion();
		$sql = "INSERT INTO " . $this->tabla . " (id_operacion, producto, descripcion, tipo_operacion, venta, fecha_creacion) VALUES ('{$objeto->id_operacion}','{$objeto->producto}','{$objeto->descripcion}','{$objeto->tipo_operacion}','{$objeto->venta}','{$objeto->fecha_creacion}')";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
		
	}

	public function update($objeto) {
		$conexion = new Conexion();
		$sql = "UPDATE " . $this->tabla . " SET producto='{$objeto->producto}', descripcion='{$objeto->descripcion}' tipo_operacion='{$objeto->tipo_operacion}', venta='{$objeto->venta}', fecha_creacion='{$objeto->fecha_creacion}' WHERE id_operacion={$objeto->id_operacion}";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
	}

	public function delete($id_operacion) {
		$conexion = new Conexion();
		$sql = "DELETE FROM " . $this->tabla . " WHERE id_operacion={$id_operacion}";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$conexion->cerrar();
		return mysqli_fetch_object($consulta);
	}

	public function findByID($id_operacion) {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id_operacion={$id_operacion}";
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