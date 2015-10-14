<?php
include("../Conexion/Conexion.php");
include("../Beans/Operacion.php");
include("ProductoServicio.php");

class Operacion {

	public $tabla = "operacion";

	public function insert($operacion) {
		$conexion = new Conexion();
		$sql = "INSERT INTO " . $this->tabla . " (id_operacion, id_producto, descripcion, id_tipo_operacion, id_venta, fecha_creacion) VALUES ('{$objeto->id_operacion}','{$objeto->producto->idProducto}','{$objeto->descripcion}','{$objeto->tipOperacion->idTipoOperacion}','{$objeto->venta->idVenta}','{$objeto->fechaCreacion}')";
		return $conexion->ejecutar($sql);
	}

	public function update($objeto) {
		$conexion = new Conexion();
		$sql = "UPDATE " . $this->tabla . " SET producto='{$objeto->producto->idProducto}', descripcion='{$objeto->descripcion}' tipo_operacion='{$objeto->tipOperacion->idTipoOperacion}', venta='{$objeto->venta->idVenta}', fecha_creacion='{$objeto->fechaCreacion}' WHERE id_operacion={$objeto->id_operacion}";
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
		return this->crearObjeto($conexion->ejecutar($sql));
	}

	public function findAll() {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla;
		return $conexion->ejecutar($sql);
	}
	
	private function crearObjeto($resultado){
		$operacion = new Operacion();
		$operacion->idOperacion=$resultado->idOperacion;
		$operacion->descripcion=$resultado->descripcion;
		
		$productoServicio = new ProductoServicio();
		$operacion->producto=$productoServicio->findById($resultado->idProducto);
		return operacion;
	}


}
?>