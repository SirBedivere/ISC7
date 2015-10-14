<?php
include("../Conexion/Conexion.php");
include("../Beans/Operacion.php");

class Operacion {

	public $tabla = "operacion";

	public function insert($operacion) {
		$conexion = new Conexion();
		$sql = "INSERT INTO " . $this->tabla . " (id_operacion, id_producto, descripcion, id_tipo_operacion, id_venta, fecha_creacion) VALUES ('{$objeto->id_operacion}','{$objeto->producto->idProducto}','{$objeto->descripcion}','{$objeto->tipOperacion->idTipoOperacion}','{$objeto->venta->idVenta}','{$objeto->fechaCreacion}')";
		return $conexion->ejecutar($sql);
		
	}

	public function update($objeto) {
		$conexion = new Conexion();
		$sql = "UPDATE " . $this->tabla . " SET producto='{$objeto->producto}', descripcion='{$objeto->descripcion}' tipo_operacion='{$objeto->tipo_operacion}', venta='{$objeto->venta}', fecha_creacion='{$objeto->fecha_creacion}' WHERE id_operacion={$objeto->id_operacion}";
		return $conexion->ejecutar($sql);
	}

	public function delete($id_operacion) {
		$conexion = new Conexion();
		$sql = "DELETE FROM " . $this->tabla . " WHERE id_operacion={$id_operacion}";
		return $conexion->ejecutar($sql);
	}

	public function findByID($id_operacion) {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id_operacion={$id_operacion}";
		return $conexion->ejecutar($sql);
	}

	public function findAll() {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla;
		return $conexion->ejecutar($sql);
	}


}
?>