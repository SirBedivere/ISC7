<?php 
include("../Conexion/Conexion.php");
include("../Beans/Venta.php");


class Venta {
	public $tabla = "venta";
	/**
	 * Insert
	 */
	public function insert($venta) {

		// abrir conexión BD
		$conexion = new Conexion();

		//insertar 
		$sql = "INSERT INTO " . $this->tabla . " (idVenta,estatus,fechaCreacion,usuario,tipoOperacion,carritoCompra) VALUES 
			('{$venta->idVenta}', '{$venta->estatus}','{$venta->fechaCreacion}','{$venta->usuario}','{$venta->tipoOperacion,}','{$venta->carritoCompra}')";
		return $conexion->ejecutar($sql);
	}
	/**
	 * Find by ID
	 */
	public function findByID($id) {
		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$idVenta}";
		return $conexion->ejecutar($sql);
		}
	/**
	 * Find All
	 */
	public function findAll() {
		// abrir conexión BD
		$conexion = new Conexion();
		// generar SQL del DAO
		$sql = "SELECT * FROM " . $this->tabla;
		return $conexion->ejecutar($sql);
	
	}
	/**
	 * Delete
	 */
	public function delete($id) {
		// abrir conexión BD
		$conexion = new Conexion();
		// generar SQL del DAO
		$sql = "DELETE FROM " . $this->tabla . " WHERE id={$idVenta}";
		return $conexion->ejecutar($sql);

	}
	/**
	 * Actualizar
	 */
	public function update($venta) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "UPDATE " . $this->tabla . " SET estatus='{$venta->estatus}', FechaCreacion='{$venta->fechaCreacion}', usuario_id='{$venta->usuario}' WHERE id={$venta->idVenta}";
		return $conexion->ejecutar($sql);

	}

}